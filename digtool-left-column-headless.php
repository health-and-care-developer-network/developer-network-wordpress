<?php
/*
    Template Name: Digital Tools Left Column Headless
*/
?>
<?php get_header(); ?>

<div role="main" class="main digital-tools-style">
    <div class="main_content cf">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="breadcrumbs">
                <div class="wrapper">
                    <ul>
                        <li>You are here:</li>
                        <li><a href="/">Home</a></li>
                        <li class="separator">&gt;</li>
                        <li><a href="/apps">Apps</a></li>
                        <li class="separator">&gt;</li>
                        <li class="active"><?php the_title(); ?></li>
                    </ul>
                </div>
            </div>
            <div class="wrapper cf container">
                <div class="one_quarter tree_wrap">
                  <?php include_once "quick-links.php" ?>
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
<?php include_once "box-counter.php" ?>
<?php the_field('js_script'); ?>
<script src="<?php echo get_template_directory_uri() . '/js/landing/site.js' ?>" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri() . '/js/digital-tools/information-request.js' ?>" type="text/javascript"></script>
<style>
	
	.digital-tools-style .content_wrap h1 {
      color: #231F20;
      border-bottom: 0;
      font-weight: 500;
	  margin-bottom: 12px;
  }
.digital-tools-style .one_quarter.tree_wrap .q-link {
    color: #005BBB;
    font-family: "Open Sans", "Ubuntu";
    font-size: 1.1em;
    font-weight: 600;
    line-height: 1.6em;
    text-align: justify;
}
.digital-tools-style .content_wrap a {
    color: #005BBB;
}	
.digital-tools-style .breadcrumbs ul li.active {
    color: #005BBB;
    font-weight: bold;
}
</style>
<?php get_footer();

