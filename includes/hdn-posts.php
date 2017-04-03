<?php

/**
 * Class hdnPosts
 * Contains various hooks for the HDN theme
 */
class hdnPosts
{
    /**
     * Deletes the transient from the database when a library post changes
     * @param $post_id
     * @param $post
     * @param $update
     */
    public function saveLibrary($post_id, $post, $update)
    {
        delete_transient('hdn:tree_nav_pages');
    }

    /**
     * Moved shortcode function into class for namespacing.
     * @param $attr
     * @param null $content
     * @return null|string
     */
    public function captionShortcode($attr, $content = null)
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
}
