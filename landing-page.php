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
        <?php include_once "breadcrumbs.php"; ?>
        <div class="wrapper cf container">
            <div class="one_quarter tree_wrap">
                <h2>Additional Information</h2>
                <p>Short term goals for this library.</p>
                <p>Our long term vision.</p>
            </div>
            <div class="three_quarters">
                <div class="content_wrap">
                    <h1>The path to publication on the NHS Digital Tools Library</h1>
                    <h4>The NHS <a href="#">Digital Tools Library</a> (Beta) is now available.
                    There are currently a small number of Apps, including categories for Mental Health and Diabetes.
                    These categories will grow and citizens will be able to access an expanding set of assessed tools
                        that will help them to organise and manage their own health and care.</h4>
                    <p>The NHS is in the early stages of developing its promotion of Health Apps &amp; Tools
                    within the Health and Care environment. On this site we have presented our first views on criteria
                    that we would look to assess digital tools against. This can be used as a guide to the type of areas
                    that the NHS would be looking to assess against in the future.</p>
                    <h5>Some apps in the library are labelled as 'Being tested in the NHS' meaning there is a programme gathering evidence on whether the use of
                        these apps improves clinical outcomes. Others are labelled, 'NHS Approved' which is reserved for those Apps &amp; Tools that have evidenced
                    improved clinical outcomes through the NHS.</h5>
                    <h2>Assessment Process</h2>
                    <p>Patients trust our content and the library is based around a robust assessment process (<a href="#">Digital Assessment Questions</a>)
                        designed to set a high standard for developers ot adhere to. You can assess youselves against these questions and if you feel that oyu would be
                        able to comply with these, or would be near to complying, then please <a href="#">register your interest</a>. Once the next
                        steps have been defined, we will contact you with further information.</p>
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
                </div>
            </div>
        </div>
    </div>
</div>

<?php wp_footer(); ?>

</body>
</html>
