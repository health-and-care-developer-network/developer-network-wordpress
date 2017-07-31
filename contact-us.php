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
        <div class="breadcrumbs">
            <div class="wrapper">
                <ul>
                    <li>You are here:</li>
                    <li><a href="/">Home</a></li>
                    <li class="separator">&gt;</li>
                    <li class="active">Digital Tools</li>
                </ul>
            </div>
        </div>

        <div class="wrapper cf container">
            <div class="one_quarter tree_wrap">
                <h2>Additional Information</h2>
                <p>Short term goals for this library.</p>
                <p>Our long term vision.</p>
            </div>
            <div class="three_quarters">
                <div class="content_wrap">
                  <h2 class="large_space">Frequently Asked Questions</h2>

                    <div class="faq_content">
                        <?php hdnPosts::the_faqs('contact-us'); ?>
                    </div>

                </div>

                <div class="content_wrap">
                  <h2 class="large_space">Contact Us Form </h2>

                    <div class="large_space">
                      <?php echo FrmFormsController::show_form(51, $key = '', $title=false, $description=false); ?>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<script async src="<?php echo get_template_directory_uri() . '/js/digital-tools/faq.js' ?>" type="text/javascript"></script>
<?php get_footer();
