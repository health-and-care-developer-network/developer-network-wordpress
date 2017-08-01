<?php
/*
    Template Name: Contact Us
*/
?>
<?php get_header(); ?>

<div role="main" class="main contact-us-style">
    <div class="page_title">
        <div class="wrapper">
            <hgroup>
                <h1>Contact Us</h1>
                <h2>Information for Developers about the Digital Tools Library (beta)</h2>
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
                        <li class="active"><?php the_title(); ?></li>
                    </ul>
                </div>
            </div>
            <div class="wrapper cf container">
                <div class="one_quarter tree_wrap">
                    <?php include_once "quick-links.php" ?>
                    <!--
                      <h2>Additional Information</h2>
                      <p>Short term goals for the library</p>
                      <p>Our long term vision</p> 
                    -->
                </div>
                <div class="three_quarters">
                    <div class="content_wrap">
                        <h1>Contact Us</h1>
                        <div class="large_space grey_text">
                          Before you contact us for further information, please read the frequently asked questions (FAQs).
                          Use the link to "All FAQs" if you do not find what you need in the three FAQs on this page.
                        </div>
                        <h2>Frequently Asked Questions</h2>
                        <div class="content_wrap_content">
                            <?php the_content(); ?>
                            <div class="faq_content">
                                <?php hdnPosts::the_faqs('contact-us'); ?>
                            </div>
                        </div>
                    </div>

                    <div class="content_wrap">
                      <form action="/digital-tools/frequently-asked-questions" ><button type="submit" class="btnFaq">More FAQs</button></form>
                    </div>

                    <div class="content_wrap">
                      <h2 class="large_space">Contact Form</h2>
                        <div class="grey_text">
                          Please note that we can only handle queries relating to digital tools developed for inclusion on the Digital Tools Library.
                          If your query relates to anything else please refer to our main NHS Digital website at
                          <a href="https://digital.nhs.uk/Contact-us">https://digital.nhs.uk/Contact-us</a>.
                        </div>

                        <div class="large_space">
                          <?php echo FrmFormsController::show_form(51, $key = '', $title=false, $description=false); ?>
                        </div>

                    </div>
                    <?php include_once "likes.php"; ?>
                </div> <!-- three_quarters -->
            </div>
      <?php endwhile; endif; ?>
    </div>

</div>

<script src="<?php echo get_template_directory_uri() . '/js/contact-us.js' ?>" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri() . '/js/digital-tools/faq.js' ?>" type="text/javascript"></script>
<?php get_footer();
