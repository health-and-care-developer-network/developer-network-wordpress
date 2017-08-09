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
                <h1>Apps</h1>
                <h2>Information for Developers about the Apps Library (Beta)</h2>
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
                    <li class="active">Apps</li>
                </ul>
            </div>
        </div>
        <div class="wrapper cf container">
            <div class="one_quarter tree_wrap">
                <?php include_once "additional-information.php"; ?>
            </div>
            <div class="three_quarters">
                <div class="content_wrap">
                    <h2>The Apps Library Assessment Path</h2>

                    <p>The current NHS Apps Library (<a href="https://apps.beta.nhs.uk">apps.beta.nhs.uk</a>) is a beta site, which
                       means that it is in development.<br/>
                       We have developed a collection of standards and guidance information to help you develop apps which meet the
                      principles of quality applied to all digital products. This means your app will meet what we consider to be
                      good quality digital standards for safety, experience and effectiveness. </p>
                    <p>All apps applying to go on the NHS Apps Library must be assessed equally and thoroughly
                      through the current process framework. </p>

                    <h2 class="large_space">Assessment Process and Questions to Produce Trusted Content</h2>

                    <p>To get an idea of the standards, rules and regulations against which health apps are assessed
                      you can view the <a href="/digital-tools/daq">Digital Assessment Questionnaire – Beta</a>.
                      For now, this is only a guide to the assessment question criteria we are using.
                      If you feel that you would be able to  comply with the assessment, or would be near to complying,
                      please register your interest as a developer.
                      Once the next steps have been defined we will contact you with further information.</p>

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
                            <a href="/digital-tools/register-your-interest">Register Your Interest &gt;</a>
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

<script src="<?php echo get_template_directory_uri() . '/js/digital-tools/faq.js' ?>" type="text/javascript"></script>
<?php get_footer();
