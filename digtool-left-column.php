<?php
/*
    Template Name: Digital Tools Left Column
*/
?>
<?php get_header(); ?>

<div role="main" class="main digital-tools-style">
    <div class="page_title">
        <div class="wrapper">
            <hgroup>
                <h1>Digital Tools</h1>
                <h2>Information for Developers about the Digital Tools Library (Beta)</h2>
            </hgroup>
        </div>
    </div><!--end page title-->
    <div class="main_content cf">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="breadcrumbs">
                <div class="wrapper">
                    <ul>
                        <li>You are here:</li>
                        <li><a href="/">Home</a></li>
                        <li class="separator">&gt;</li>
                        <li><a href="/digital-tools">Digital Tools</a></li>
                        <li class="separator">&gt;</li>
                        <li class="active"><?php the_title(); ?></li>
                    </ul>
                </div>
            </div>
            <div class="wrapper cf container">
                <div class="one_quarter tree_wrap">
                    <h2>Quick Links</h2>
                    <p>How can I get my app on the library?</p>
                    <p>Other FAQs</p>
                </div>
                <div class="three_quarters">
                    <div class="content_wrap">
                        <h1><?php the_title(); ?></h1>
                        <div class="content_wrap_content">
                            <?php the_content(); ?>
                        </div>
                        <?php include_once "likes.php"; ?>
                    </div>
                </div>
            </div>
        <?php endwhile; endif; ?>
    </div>
</div>
<?php the_field('js_script'); ?>
<?php get_footer();
