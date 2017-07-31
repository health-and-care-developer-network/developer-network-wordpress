<?php

/**
 * Class hdnPosts
 * Contains various hooks for the HDN theme
 */
class hdnPosts
{
    
    //private static $topLevelCategories, $midLevelCategories, $displayCategories, $displayPassedCategory;
    public static
        $displayTree,
        $sTree,
        $category;
    
    /**
     * Deletes the transient from the database when a learn post changes
     * @param $post_id
     * @param $post
     * @param $update
     */
    public static function saveLearn($post_id, $post, $update)
    {
        delete_transient('hdn:learn_list');
        delete_transient('hdn:learn_sidebar');
    }

    /**
     * Deletes the transient from the database when a testcentre post changes
     * @param $post_id
     * @param $post
     * @param $update
     */
    public static function saveTestCentre($post_id, $post, $update)
    {
        delete_transient('hdn:testcentre');
    }

    /**
     * Deletes the transient from the database when a download-data post changes
     * @param $post_id
     * @param $post
     * @param $update
     */
    public static function saveDownloadsData($post_id, $post, $update)
    {
        delete_transient('hdn:download_data');
    }

    /**
     * Deletes the transient from the database when a library post changes
     * @param $post_id
     * @param $post
     * @param $update
     */
    public static function saveLibrary($post_id, $post, $update)
    {
        delete_transient('hdn:tree_nav_pages');
        delete_transient('hdn:archive_library');
        delete_transient('hdn:download_data');
    }

    /**
     * Moved shortcode function into class for namespacing.
     * @param $attr
     * @param null $content
     * @return null|string
     */
    public static function captionShortcode($attr, $content = null)
    {
        if (!isset($attr['caption'])) {
            if (preg_match('#((?:<a [^>]+>\s*)?<img [^>]+>(?:\s*</a>)?)(.*)#is', $content, $matches)) {
                $content = $matches[1];
                $attr['caption'] = trim($matches[2]);
            }
        }

        $output = apply_filters('img_caption_shortcode', '', $attr, $content);
        if ($output != '')
            return $output;

        extract(shortcode_atts(array(
            'id' => '',
            'align' => 'alignnone',
            'width' => '',
            'caption' => ''
        ), $attr));

        if (1 > (int)$width || empty($caption))
            return $content;

        if ($id) $id = 'id="' . esc_attr($id) . '" ';

        return '<div ' . $id . 'class="wp-caption ' . esc_attr($align) . '" style="width: ' . $width . 'px">'
            . do_shortcode($content) . '<p>' . $caption . '</p></div>';
    }

    public static function processCatTree($cat, $postType) {
        
        $passedCat = $cat;
        
        $args = array('category__in' => array($cat), 'numberposts' => -1, 'post_type' => $postType);
        $cat_posts = get_posts($args);
        
        // 
        if (count($cat_posts) > 0) :
            self::$displayTree[self::$category] = true;
            self::$sTree .= '<ul>';
            foreach ($cat_posts as $post) :
                self::$sTree .= '<li class="'. $post->term_id .'"><a href="' . get_permalink($post->ID) . '">' . $post->post_title . '</a></li>';
            endforeach;
            self::$sTree .= '</ul>';
        endif;

        $next = get_categories('hide_empty=1&parent=' . $cat);

        if (count($next)>0) :
            
            foreach ($next as $cat) {
                // get count of subs
                $subcats = get_categories('hide_empty=1&parent=' . $cat->id);
                if (count($subcats) > 0) {
                    // only queue for display if there are posts in the category
                    if (count(get_posts(['category__in' => array($cat->term_id), 'numberposts' => -1, 'post_type' => $postType])) > 0) {
                        self::$sTree .= '<ul class="sub_cat_list">';
                        self::$sTree .= '<li class="sub_cat '. $cat->term_id .'  '.  $passedCat .' ">' . $cat->name . '</li>';
                        self::processCatTree($cat->term_id, $postType);
                        self::$sTree .= '</ul>';
                    } // if - use if we want to make the sub categories quiet
                } // count
            } // foreach
            
        endif;
    } // processCatTree
    
    public static function generateTemplateTransient($key, Closure $closure) {
        //$value = get_transient('hdn:' . $key);
        
        //if (!$value) {
            ob_start();
            $closure();
            $value = ob_get_clean();
            //set_transient('hdn:' . $key, $value, 86400);
        //}

        return $value;
    } // generateTemplateTransient

    public static function the_faqs($tag = null) {
        $query = ['post_type' => 'faq',
            'posts_per_page' => '-1'];

        if ($tag) {
            $query['tag'] = $tag;
        }

        $faqQuery = new WP_Query($query);

        while($faqQuery->have_posts()) {
            $faqQuery->the_post();
            ?>
            <div class="faq-item" data-status="closed">
                <div class="faq-header">
                    <?php the_title(); ?>
                </div>
                <div class="faq-answer">
                    <?php the_content(); ?>
                </div>
            </div>
            <?php
        };
    }

} // hdnPosts
