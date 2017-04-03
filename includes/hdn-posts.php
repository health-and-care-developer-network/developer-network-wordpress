<?php

/**
 * Class hdnPosts
 * Contains various hooks for the HDN theme
 */
class hdnPosts
{
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
        $args = array('category__in' => array($cat), 'numberposts' => -1, 'post_type' => $postType);
        $cat_posts = get_posts($args);

        if ($cat_posts) :
            echo '<ul>';
            foreach ($cat_posts as $post) :
                echo '<li><a href="' . get_permalink($post->ID) . '">' . $post->post_title . '</a></li>';
            endforeach;
            echo '</ul>';
        endif;

        $next = get_categories('hide_empty=0&parent=' . $cat);

        if ($next) :
            echo '<ul class="sub_cat_list">';
            foreach ($next as $cat) :
                echo '<li class="sub_cat">' . $cat->name . '</li>';
                self::processCatTree($cat->term_id, $postType);
            endforeach;
            echo '</ul>';
        endif;
    }

    public static function generateTemplateTransient($key, Closure $closure) {
        $value = get_transient('hdn:' . $key);
        if (!$value) {
            ob_start();
            $closure();
            $value = ob_get_clean();
            set_transient('hdn:' . $key, $value, 86400);
        }

        return $value;
    }
}
