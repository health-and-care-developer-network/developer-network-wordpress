<?php
/*
Template Name: Page Article Full Width
*/
?>

<?php get_header(); ?>

<div role="main" class="main">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="page_title">
            <div class="wrapper">
                <hgroup>
                    <h1><?php the_title(); ?></h1>
                    <h2><?php the_field('sub_title'); ?></h2>
                </hgroup>
            </div>
        </div><!--end page title-->
        <div class="main_content cf">
            <?php include_once "breadcrumbs.php"; ?>
            <div class="wrapper cf container">

                <div class="full_width">
                        <div class="content_wrap cf">
                            <article class="cf">
                                <div class="full_width art_txt_area">
                                    <hgroup>
                                        <h2 class="beta"><?php the_title(); ?></h2>
                                        <h3 class="delta"><?php the_field('sub_title'); ?></h3>
                                    </hgroup>
                                    <div class="art_txt">
                                        <?php the_content(); ?>
                                    </div>
                                    <?php include_once "likes.php"; ?>

                                </div><!--end three quarters-->

                            </article>
                        </div><!--end content wrap-->
                </div><!--end full width-->
            </div><!--end wrapper-->
        </div><!--end main_content-->
    <?php endwhile; endif; ?>
</div><!-- end main -->

<?php get_footer(); ?>
