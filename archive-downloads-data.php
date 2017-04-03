<?php
get_header();
$downloadSummary = get_transient('hdn:download_data');

if (!$downloadSummary) {
    ob_start();
    foreach (get_categories('hide_empty=0&exclude=1') as $cat) :
        if (!$cat->parent) {
            echo '<div class="one_third"><div class="box"><div class="line red_line"></div><section class="nav_box red"><h3>' . $cat->name . '</h3>';
            process_cat_tree($cat->term_id);
            echo '</section></div></div>';
        }
    endforeach;

    wp_reset_query(); //to reset all trouble done to the original query

    $downloadSummary = ob_get_clean();

    set_transient('hdn:download_data', $downloadSummary, 86400);
}

?>
    <div role="main" class="main">
    <div class="page_title">
        <div class="wrapper">
            <hgroup>
                <h1>Downloads &amp;amp; Data</h1>
                <h2>Download tools and source code; access data sources and services</h2>
            </hgroup>
        </div>
    </div><!--end page title-->

    <div class="main_content cf">
        <?php include_once "breadcrumbs.php"; ?>
        <div class="wrapper cf">
            <div class="fw_nav_boxes">
                <?php
                echo $downloadSummary;
                ?>

            </div><!--end content wrap-->
        </div><!--end wrapper-->
    </div><!--end main_content-->
<?php get_footer();

function process_cat_tree($cat)
{
    $args = array('category__in' => array($cat), 'numberposts' => -1, 'post_type' => 'downloads-data');
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
            process_cat_tree($cat->term_id);
        endforeach;
        echo '</ul>';
    endif;
}


