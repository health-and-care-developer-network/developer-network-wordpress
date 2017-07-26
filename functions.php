<?php
include_once dirname(__FILE__) . '/includes/hdn-posts.php';

if (SITE == 'developer-test.nhs.uk') {
    define('DATASITE','https://data.developer-test.nhs.uk');
} else {
    define('DATASITE','https://data.developer.nhs.uk');
}

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

include_once dirname(__FILE__) . '/includes/hdn-rest.php';

// Register Custom Post Type
function faq_post_type() {

    $labels = array(
        'name'                  => _x( 'faqs', 'Post Type General Name', 'text_domain' ),
        'singular_name'         => _x( 'faq', 'Post Type Singular Name', 'text_domain' ),
        'menu_name'             => __( 'FAQs', 'text_domain' ),
        'name_admin_bar'        => __( 'FAQ', 'text_domain' ),
        'archives'              => __( 'FAQ Archives', 'text_domain' ),
        'attributes'            => __( 'FAQ Attributes', 'text_domain' ),
        'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
        'all_items'             => __( 'All FAQs', 'text_domain' ),
        'add_new_item'          => __( 'Add New FAQ', 'text_domain' ),
        'add_new'               => __( 'Add New', 'text_domain' ),
        'new_item'              => __( 'New FAQ', 'text_domain' ),
        'edit_item'             => __( 'Edit FAQ', 'text_domain' ),
        'update_item'           => __( 'Update FAQ', 'text_domain' ),
        'view_item'             => __( 'View FAQ', 'text_domain' ),
        'view_items'            => __( 'View FAQs', 'text_domain' ),
        'search_items'          => __( 'Search FAQ', 'text_domain' ),
        'not_found'             => __( 'Not found', 'text_domain' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
        'featured_image'        => __( 'Featured Image', 'text_domain' ),
        'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
        'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
        'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
        'insert_into_item'      => __( 'Insert into FAQ', 'text_domain' ),
        'uploaded_to_this_item' => __( 'Uploaded to this FAQ', 'text_domain' ),
        'items_list'            => __( 'FAQs list', 'text_domain' ),
        'items_list_navigation' => __( 'FAQs list navigation', 'text_domain' ),
        'filter_items_list'     => __( 'Filter FAQs list', 'text_domain' ),
    );
    $args = array(
        'label'                 => __( 'faq', 'text_domain' ),
        'description'           => __( 'FAQ Post Type', 'text_domain' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', ),
        'taxonomies'            => array( 'post_tag' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => false,
        'exclude_from_search'   => true,
        'publicly_queryable'    => true,
        'rewrite'               => false,
        'capability_type'       => 'page',
        'show_in_rest'          => false,
    );
    register_post_type( 'faq', $args );

}
add_action( 'init', 'faq_post_type', 0 );
