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
                <h2>Information for Developers about the Digital Tools Library (beta)</h2>
            </hgroup>
        </div>
    </div><!--end page title-->
    <div class="main_content cf">
        <?php include_once "breadcrumbs.php"; ?>
        <div class="wrapper cf container">
            <div class="one_quarter tree_wrap">
                <h2>Quick Links</h2>
                <p>How can I get my app on the library?</p>
                <p>Other FAQs</p>
            </div>
            <div class="three_quarters">
                <div class="content_wrap">
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <h1><?php the_title(); ?></h1>
                        <div class="content_wrap_content">
                            <?php the_content(); ?>
                        </div>
                        <?php include_once "likes.php"; ?>
                    <?php endwhile; endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php wp_footer(); ?>

</body>
</html>
