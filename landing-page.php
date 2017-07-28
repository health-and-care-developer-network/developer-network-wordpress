<?php
/*
    Template Name: Landing Page
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
                    <h1>The Digital Tools Library Assessment Path</h1>

                    <p>The current NHS Digital Tools Library (<a href="https://apps.beta.nhs.uk">apps.beta.nhs.uk</a>) is a beta site, which means that it is in development.</p>
                    <p>We have developed a collection of standards and guidance information to help you develop digital tools which meet the principles of quality applied to all digital products. This means your digital tool will meet what we consider to be good quality digital standards for safety, experience and effectiveness. </p>
                    <p>All digital tools applying to go on the NHS Digital Tools Library must be assessed equally and thoroughly through the current process framework. </p>

                    <h4>Assessment Process and Questions to Produce Trusted Content</h4>

                    <p>To get an idea of the standards, rules and regulations against which digital health tools are assessed you can view the <a href="/digital-tools/daq">Digital Assessment Questionnaire – Beta</a>. For now, this is only a guide to the assessment question criteria we are using. If you feel that you would be able to comply with the assessment, or would be near to complying, please register your interest as a developer. Once the next steps have been defined we will contact you with further information.</p>

                    <div class="assessment_path">
                        <div class="link_section">
                            <a href="#">
                                <div class="link_container">
                                    <div class="review_icon"></div>
                                    <span>Review Assessment Questions</span>
                                </div>
                            </a>
                            <a href="#">Review Assessment Questions &gt;</a>
                        </div>
                        <div class="arrow_section">
                        </div>
                        <div class="link_section">
                            <a href="#">
                                <div class="link_container">
                                    <div class="register_icon"></div>
                                    <span>Register Your Interest</span>
                                </div>
                            </a>
                            <a href="#">Register Your Interest &gt;</a>
                        </div>
                    </div>

                    <h2 class="large_space">Frequently Asked Questions</h2>

                    <div class="faq_content">
                        <?php hdnPosts::the_faqs('landing'); ?>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<script async src="<?php echo get_template_directory_uri() . '/js/digital-tools/faq.js' ?>" type="text/javascript"></script>
<?php get_footer();
