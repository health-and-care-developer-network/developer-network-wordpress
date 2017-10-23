<?php
/*
    Template Name: Open Health Data Challenge
*/
?>
<?php get_header(); ?>

    <div role="main" class="main digital-tools-style">
        <div class="page_title">
            <div class="wrapper">
                <hgroup>
                    <h1>Apps</h1>
                    <h2>Open Health Data Challenge</h2>
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
                        <li class="">Apps</li>
                        <li class="separator">&gt;</li>
                        <li class="active">Open Health Data Challenge</li>
                    </ul>
                </div>
            </div>
            <div class="wrapper cf container">
                <div class="one_quarter tree_wrap">
                    <?php include_once "quick-links.php" ?>
                </div>

                <div class="three_quarters">
                    <div class="content_wrap apps-landing-page">

                        <h2>What is the Open Health Data Challenge?</h2>
                        <hr style="border-top: 1px solid #d8d8d8;"/>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                            ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
                            in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                            non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>

                        <p>
                          <?php echo FrmFormsController::get_form_shortcode( array( 'id' => 244, 'title' => false, 'description' => false ) ); ?>
                        </p>
                    </div> <!-- inner - content wrap -->
                </div> <!-- three_quarters - main wrap -->

            </div>
        </div>
    </div>

    <script src="<?php echo get_template_directory_uri() . '/js/digital-tools/faq.js' ?>"
            type="text/javascript"></script>
<?php get_footer();
