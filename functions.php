<?php
include_once dirname(__FILE__) . '/includes/hdn-posts.php';

add_filter('solr_scheme', function () {
    return 'http';
});

/*-----------------------------------------
Add Parent class to tree nav items with children.
-----------------------------------------*/
add_filter('page_css_class', function ($css_class, $page, $depth, $args) {
    if (!empty($args['has_children']))
        $css_class[] = 'parent';
    return $css_class;
}, 10, 4);

add_filter('excerpt_length', function ($length) {
    return 20;
}, 999);

add_shortcode('wp_caption', ['hdnPosts','captionShortcode']);
add_shortcode('caption', ['hdnPosts','captionShortcode']);

add_image_size('contributor_image', 215, 71); // Contributor image size

add_filter('mce_buttons_2', function ($buttons) {
    array_unshift($buttons, 'styleselect');
    return $buttons;
});

add_filter('tiny_mce_before_init', function ($settings) {
    $style_formats = array(
        array(
            'title' => 'Grey Box',
            'block' => 'div',
            'classes' => 'grey_box',
            'wrapper' => true
        ),
        array(
            'title' => 'Green Box',
            'block' => 'div',
            'classes' => 'green_box',
            'wrapper' => true
        ),
        array(
            'title' => 'Red Box',
            'block' => 'div',
            'classes' => 'red_box',
            'wrapper' => true
        ),
        array(
            'title' => 'Blue Box',
            'block' => 'div',
            'classes' => 'blue_box',
            'wrapper' => true
        ),
        array(
            'title' => 'Red Button',
            'selector' => 'a',
            'classes' => 'btn_mce red_btn'
        ),
        array(
            'title' => 'Aqua Green Button',
            'selector' => 'a',
            'classes' => 'btn_mce aquaGreen_btn'
        ),
        array(
            'title' => 'Purple Button',
            'selector' => 'a',
            'classes' => 'btn_mce purple_btn'
        ),
        array(
            'title' => 'Orange Button',
            'selector' => 'a',
            'classes' => 'btn_mce orange_btn'
        ),
    );

    $settings['style_formats'] = json_encode($style_formats);

    return $settings;
});

add_action('admin_init', function() {
    add_editor_style();
});

add_action('right_now_content_table_end', function () {
    $args = array(
        'public' => true,
        '_builtin' => false
    );
    $output = 'object';
    $operator = 'and';
    $post_types = get_post_types($args, $output, $operator);
    foreach ($post_types as $post_type) {
        $num_posts = wp_count_posts($post_type->name);
        $num = number_format_i18n($num_posts->publish);
        $text = _n($post_type->labels->singular_name, $post_type->labels->name, intval($num_posts->publish));
        if (current_user_can('edit_posts')) {
            $num = "<a href='edit.php?post_type=$post_type->name'>$num</a>";
            $text = "<a href='edit.php?post_type=$post_type->name'>$text</a>";
        }
        echo '<tr><td class="first b b-' . $post_type->name . '">' . $num . '</td>';
        echo '<td class="t ' . $post_type->name . '">' . $text . '</td></tr>';
    }
    $taxonomies = get_taxonomies($args, $output, $operator);
    foreach ($taxonomies as $taxonomy) {
        $num_terms = wp_count_terms($taxonomy->name);
        $num = number_format_i18n($num_terms);
        $text = _n($taxonomy->labels->singular_name, $taxonomy->labels->name, intval($num_terms));
        if (current_user_can('manage_categories')) {
            $num = "<a href='edit-tags.php?taxonomy=$taxonomy->name'>$num</a>";
            $text = "<a href='edit-tags.php?taxonomy=$taxonomy->name'>$text</a>";
        }
        echo '<tr><td class="first b b-' . $taxonomy->name . '">' . $num . '</td>';
        echo '<td class="t ' . $taxonomy->name . '">' . $text . '</td></tr>';
    }
});

add_action('admin_menu', function() {
    global $menu;
    global $submenu;

    remove_menu_page('edit.php'); // Remove the posts Menu
    remove_menu_page('edit-comments.php'); // Remove the comments Menu
});

add_action('save_post_library', ['hdnPosts', 'saveLibrary'], 10, 3);
add_action('save_post_downloads-data', ['hdnPosts', 'saveDownloadsData'], 10, 3);
add_action('save_post_testcentre', ['hdnPosts', 'saveTestCentre'], 10, 3);
add_action('save_post_testcentre', ['hdnPosts', 'saveLearn'], 10, 3);

add_action( 'rest_api_init', function () {
    register_rest_route( 'hdn/v1', '/post-type-categories', array(
        'methods' => 'GET',
        'callback' => function(WP_REST_Request $request) {
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
    ) );
} );