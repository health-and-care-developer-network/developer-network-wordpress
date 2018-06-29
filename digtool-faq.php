<?php
/*
    Template Name: Digital Tools FAQ Page
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
                            <div class="faq_content">
                              <?php hdnPosts::the_faqs('one'); ?>
                              <?php hdnPosts::the_faqs('two'); ?>
                              <?php hdnPosts::the_faqs('three'); ?>
                              <?php hdnPosts::the_faqs('four'); ?>
                              <?php hdnPosts::the_faqs('five'); ?>
                              <?php hdnPosts::the_faqs('six'); ?>
                              <?php hdnPosts::the_faqs('seven'); ?>
                              <?php hdnPosts::the_faqs('eight'); ?>
                              <?php hdnPosts::the_faqs('nine'); ?>
                              <?php hdnPosts::the_faqs('ten'); ?>
                              <?php hdnPosts::the_faqs('eleven'); ?>
                              <?php hdnPosts::the_faqs('twelve'); ?>
                              <?php hdnPosts::the_faqs('thirteen'); ?>

                            </div>
                        </div>
                        <?php include_once "likes.php"; ?>
                    </div>
                </div>
            </div>
        <?php endwhile; endif; ?>
    </div>
</div>
<script src="<?php echo get_template_directory_uri() . '/js/digital-tools/faq.js' ?>" type="text/javascript"></script>
<style>
  .digital-tools-style .content_wrap h1, .digital-tools-style .faq_content .faq-item .faq-header {
      color: #231F20;
      border-bottom: 0;
      font-weight: 500;
	  margin-bottom: 12px;
  }
  .digital-tools-style .content_wrap a {
      color: #005BBB;
   }	
	
.digital-tools-style .faq_content .faq-item .faq-header {
    padding-top: 18px;
    padding-bottom: 18px;
    line-height: 1.4em;
    padding-right: 48px;
    font-size: 20px;
    position: relative;
    cursor: pointer;
    user-select: none;
}	

.digital-tools-style .breadcrumbs ul li.active, .digital-tools-style .content_wrap a, .digital-tools-style .one_quarter.tree_wrap .q-link {
    color: #005BBB;
}	
</style>
<?php get_footer();

