<?php
class hdnRest {
    public function getSiteConfig() {
        return [
            'blogname' => get_bloginfo('name', 'display'),
            'favicon' => get_bloginfo('template_directory', 'display') . '/favicon.ico'
        ];
    }

    public function postTypeCategories (WP_REST_Request $request) {
        global $wpdb;

        $start = microtime(true);
        $postType = $request->get_param('post_type');

        $results = $wpdb->get_results($wpdb->prepare('
SELECT wt.term_id as \'tid1\', wt.name as \'tname1\', 
    wt2.term_id as \'tid2\', wt2.name as \'tname2\', wt3.term_id as \'tid3\', wt3.name as \'tname3\', 
	 wt4.term_id as \'tid4\', wt4.name as \'tname4\', wp.ID as \'post_id\', 
	 wp.post_date, wp.post_title, 
	 CONCAT(\'/\',wp.post_type,\'/\',
	 	COALESCE(CONCAT(wp4.post_name,\'/\'),\'\'),
		COALESCE(CONCAT(wp3.post_name,\'/\'),\'\'),
		COALESCE(CONCAT(wp2.post_name,\'/\'),\'\'),
		COALESCE(wp.post_name,\'/\')) as permalink
FROM wp_terms as wt
JOIN wp_term_taxonomy as wtt ON (wtt.term_id = wt.term_id)
JOIN wp_term_relationships as wtr ON (wtr.term_taxonomy_id = wtt.term_taxonomy_id)
JOIN wp_posts as wp ON (wp.ID = wtr.object_id)
LEFT JOIN wp_term_taxonomy as wtt2 ON (wtt2.term_taxonomy_id = wtt.parent)
LEFT JOIN wp_terms as wt2 ON (wt2.term_id = wtt2.term_id)
LEFT JOIN wp_term_taxonomy as wtt3 ON (wtt3.term_taxonomy_id = wtt2.parent)
LEFT JOIN wp_terms as wt3 ON (wt3.term_id = wtt3.term_id)
LEFT JOIN wp_term_taxonomy as wtt4 ON (wtt4.term_taxonomy_id = wtt3.parent)
LEFT JOIN wp_terms as wt4 ON (wt4.term_id = wtt4.term_id)
LEFT JOIN wp_posts as wp2 ON (wp2.ID = wp.post_parent)
LEFT JOIN wp_posts as wp3 ON (wp3.ID = wp2.post_parent)
LEFT JOIN wp_posts as wp4 ON (wp4.ID = wp3.post_parent)
WHERE wtt.taxonomy = \'category\' AND wp.post_status = \'publish\'
AND wp.post_type = %s
            ', $postType), ARRAY_A);

        $catPosts = [];
        $catCache = [];
        $catParent = [];

        foreach($results as $row) {
            if ($row['tid4']) {
                $catCache[$row['tid4']] = $row['tname4'];
                $catParent[$row['tid4']] = null;
            }
            if ($row['tid3']) {
                $catCache[$row['tid3']] = $row['tname3'];
                $catParent[$row['tid3']] = $row['tid4'];
            }
            if ($row['tid2']) {
                $catCache[$row['tid2']] = $row['tname2'];
                $catParent[$row['tid2']] = $row['tid3'];
            }
            if ($row['tid1']) {
                $catCache[$row['tid1']] = $row['tname1'];
                $catParent[$row['tid1']] = $row['tid2'];
                if (!isset($catPosts[$row['tid1']])) {
                    $catPosts[$row['tid1']] = [];
                }

                $catPosts[$row['tid1']][] = [
                    'post_id' => $row['post_id'],
                    'post_date' => $row['post_date'],
                    'post_title' => $row['post_title'],
                    'permalink' => $row['permalink']
                ];
            }
        }

        $end = microtime(true);
        return [
            'categories' => $catCache,
            'parents' => $catParent,
            'posts' => $catPosts,
            'timing' => $end - $start
        ];
    }

    public function getLatestPosts(WP_REST_Request $request) {
        global $wpdb;

        $types = $request->get_param('post_types');
        $limit = $request->get_param('limit');

        $safeTypes = [];

        foreach($types as $type) {
            $safeTypes[] = '\'' . esc_sql($type) . '\'';
        }

        $typeList = implode(',', $safeTypes);

        $results = $wpdb->get_results($wpdb->prepare('
SELECT wp.*, CONCAT(\'/\',wp.post_type,\'/\',
	 	COALESCE(CONCAT(wp4.post_name,\'/\'),\'\'),
		COALESCE(CONCAT(wp3.post_name,\'/\'),\'\'),
		COALESCE(CONCAT(wp2.post_name,\'/\'),\'\'),
		COALESCE(wp.post_name,\'/\')) as permalink, wt.*
FROM wp_posts as wp
LEFT JOIN wp_posts as wp2 ON (wp2.ID = wp.post_parent)
LEFT JOIN wp_posts as wp3 ON (wp3.ID = wp2.post_parent)
LEFT JOIN wp_posts as wp4 ON (wp4.ID = wp3.post_parent)
LEFT JOIN wp_term_relationships as wtr ON (wtr.object_id = wp.ID)
LEFT JOIN wp_term_taxonomy as wtt ON (wtt.term_taxonomy_id = wtr.term_taxonomy_id AND wtt.taxonomy = \'category\')
LEFT JOIN wp_terms as wt ON (wt.term_id = wtt.term_id)
WHERE wp.post_type IN (' . $typeList . ') AND wp.post_status=\'publish\'
ORDER BY wp.post_date DESC
LIMIT %d
        ', $limit), ARRAY_A);

        $list = [];
        $orderList = [];
        $categories = [];
        foreach($results as $row) {
            if (!isset($list[$row['ID']])) {
                $orderList[] = $row['ID'];
                $list[$row['ID']] = $row;
                unset($list[$row['ID']]['term_id']);
                unset($list[$row['ID']]['name']);
                unset($list[$row['ID']]['slug']);
                unset($list[$row['ID']]['term_group']);
                $categories[$row['ID']] = [];
            }

            if (!empty($row['term_id'])) {
                $categories[$row['ID']][] = [
                    'term_id' => $row['term_id'],
                    'name' => $row['name'],
                    'slug' => $row['slug'],
                    'term_group' => $row['term_group']
                ];
            }
        }

        return [
            'posts' => $list,
            'order' => $orderList,
            'categories' => $categories
        ];
    }

    public function search(WP_REST_Request $request) {
        $rows = $request->get_param('rows');
        $start = $request->get_param('start');

        if (empty($start)) {
            $start = 0;
        }

        if (empty($rows)) {
            $rows = 10;
        }

        $start = filter_var($start, FILTER_VALIDATE_INT);
        $rows = filter_var($rows, FILTER_VALIDATE_INT);

        $search = $request->get_param('search_term');

        $searchQuery = urlencode($search);

        $s = curl_init();

        $host = getenv('PANTHEON_INDEX_HOST');
        $port = getenv('PANTHEON_INDEX_PORT');
        $path = SOLR_PATH;

        curl_setopt($s, CURLOPT_URL, 'http://' . $host . ':' . $port . $path . '/select?&q=' . $searchQuery . '&wt=json' . '&start=' . $start . '&rows=' . $rows);
        curl_setopt($s, CURLOPT_RETURNTRANSFER, true);

        $output = json_decode(curl_exec($s),true);

        return $output['response'];
    }

    public function getExtraFields($object, $field_name, $request) {
        return get_fields($object['id']);
    }
}

add_action( 'rest_api_init', function () {
    $class = new hdnRest();

    register_rest_route( 'hdn/v1', '/get-site-config', ['methods' => 'GET', 'callback' => [$class,'getSiteConfig'], 'args' => [
        'post_type'
    ]]);

    register_rest_route( 'hdn/v1', '/get-latest-posts', ['methods' => 'GET', 'callback' => [$class,'getLatestPosts'], 'args' => [
        'post_types', 'limit'
    ]]);

    register_rest_route( 'hdn/v1', '/post-type-categories', array('methods' => 'GET', 'callback' => [$class, 'postTypeCategories']));

    register_rest_route( 'hdn/v1', '/search', array('methods' => 'GET', 'callback' => [$class, 'search'], 'args' => [
        'search_term'
    ]));

    register_rest_field( ['page', 'library', 'testcentre', 'learn', 'downloads-data'],
        'extra',
        array(
            'get_callback'    => [$class, 'getExtraFields'],
            'schema'          => null,
        )
    );
});