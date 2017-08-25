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
              <?php include_once "quick-links.php" ?>
          </div>

            <div class="three_quarters">
              <div class="content_wrap apps-landing-page">

                <h2>The path to publication on the NHS Apps Library</h2>
                <h4>What is the NHS Apps Library and how do you get your app on there?</h4>
                <p>
                  The new NHS Apps Library (apps.beta.nhs.uk) has been launched as a beta site.
                  It provides citizens, patients and clinicians with a trusted selection of digital health and
                  well-being applications.
                  This enables patients and citizens to access health care related tools that have been designed and tested to
                  support the self-management and prevention of health related conditions.<br/>
                </p>
                <p>
                  These pages provide options to developers who have existing health apps they would like to
                  see on the library. It also provides options for those of you who are interested in the
                  library or have an idea for a health app that they'd like to develop.<br/>
                </p>
                <p>
                  All apps must be pass through an assessment to ensure that only trusted, high quality apps
                  are available on the Apps Library. We are currently focusing on UK produced apps that are
                  in public use. They must also be available in known app stores, such as Google Play and
                  The App Store. The library does not host apps, it provides links to the stores.<br/>
                </p>
                <p>
                  The NHS is working to update and enhance these pages and the experience for app developers.
                  To do this we are testing concepts, designs and user experience and we are actively seek
                  feedback from developers. <br/>
                </p>

                <h4>Assessment Process</h4>
                <p>
                  In order to drive and maintain a high quality offering of products on the NHS Apps Library we have
                  devised a Digital Assessment Questionnaire and review process that enables developers to self-assess
                  against relevant national standards and best practices.<br/>
                </p>
                <p>
                  The digital assessment questionnaire and assessment review process is being tested live to
                  enable a collaboration environment for developers, health care professionals and patients.
                  This supports us in the development of a fit-for-purpose process that is efficient and effective.<br/>
                </p>
                <p>
                  As the process flow below shows, once you have submitted your app for assessment it will go through
                  a pre-assessment process at NHS Digital to determine if your app is the type of app we are
                  currently assessing. If it qualifies, you will be invited to take part in the app assessment by
                  answering the digital assessment questions.<br/>
                </p>
                <p>
                  Once you submit your self-assessment answers, they will be reviewed by our subject
                  matter experts; these are specialists in various fields (regulatory, clinical safety etc.).
                  At the moment, this is a largely manual process as we are currently developing the DAQs
                  and the overall assessment process. Response times and assessment times vary from app to
                  app depending on the complexity of the assessment.<br/>
                </p>
                <p>
                  When an app has successfully completed an assessment it will go through an on boarding
                  process and is ultimately published on the NHS Apps Library.<br/>
                </p>

                <p>
                  <div class="app-process-key">
                    <div class="you-box"></div> You&nbsp;&nbsp;&nbsp;<div class="nhs-digital-box"></div> NHS Digital
                  </div>

                  <div class="app-process-container">
                    <div class="centre-text arrow">
                      Step 1<br/>Submit App</div><div class="centre-text arrow alt">
                        Step 2<br/>Pre-Assess</div><div class="centre-text arrow">
                          Step 3<br/>Complete DAQ's</div><div class="centre-text arrow alt">
                            Step 4<br/>Assess</div><div class="box-with-border"><svg height="48" width="180" class="div-bg">
                                <polygon points="1,1 120,1 140,24 120,46 1,46 24,23" style="fill: #eeeeee; stroke: #cccccc; stroke-width: 1" />
                              </svg><div class="app-process-box-text">Step 5<br/>App Published</div></div>
                  </div> <!-- app-process-container -->
                  <svg height="30" width="160" class="box-pointer-1">
                    <line x1="1" y1="1" x2="1" y2="25" style="fill: #ffffff; stroke: #cccccc; stroke-width:1" />
                    <line x1="1" y1="25" x2="120" y2="25" style="fill: #ffffff; stroke: #cccccc; stroke-width:1" />
                    <line x1="120" y1="25" x2="120" y2="1" style="fill: #ffffff; stroke: #cccccc; stroke-width:1" />
                    <polygon points="55,25 65,20 65,30" style="fill: #cccccc; stroke: #cccccc; stroke-width:1" />
                  </svg>
                  <svg height="30" width="160" class="box-pointer-2">
                    <line x1="1" y1="1" x2="1" y2="25" style="fill: #ffffff; stroke: #cccccc; stroke-width:1" />
                    <line x1="1" y1="25" x2="120" y2="25" style="fill: #ffffff; stroke: #cccccc; stroke-width:1" />
                    <line x1="120" y1="25" x2="120" y2="1" style="fill: #ffffff; stroke: #cccccc; stroke-width:1" />
                    <polygon points="55,25 65,20 65,30" style="fill: #cccccc; stroke: #cccccc; stroke-width:1" />
                  </svg>
                </p>

                <p>
                    To get an idea of the criteria against which health apps are assessed you can view the Digital
                    Assessment Questionnaire – Beta. For now, this is only a guide to the evolving
                    assessment question criteria.<br/>
                </p>

                <h4>Submit an App for assessment</h4>
                <p>
                  If you have an existing app in public use and you feel that it is ready to pass through the
                  Digital Assessment Questions, please submit your app to begin the process; otherwise you may
                  register your interest.<br/>
                </p>
                <p>
                  <form method="post" action="/digital-tools/submit-your-app">
                    <button type="button" class="btn btn-default apps-landing-page">
                      Submit <span id="submit" class="glyphicon glyphicon-list">
                    </button>
                  </form>
                </p>

                <h4>Register your Interest</h4>
                <p>
                    Are you thinking of developing a health app and need to know more?
                    Perhaps you are interested in being involved in testing or have an overall interest in the
                    apps library and assessments.
                    Select the button below to register your interest and, once the next steps have been defined, we
                    will contact you with further information.
                </p>
                <p>
                  <form method="post" action="/digital-tools/register-your-interest">
                    <button type="button" class="btn btn-default apps-landing-page">
                      Register Interest <span id="submit" class="glyphicon glyphicon-envelope"></span>
                    </button>
                  </form>
                </p>

                <h2 class="large_space">Frequently Asked Questions</h2>

                <div class="faq_content">
                    <?php hdnPosts::the_faqs('landing'); ?>
                </div>

              </div> <!-- inner - content wrap -->
            </div> <!-- three_quarters - main wrap -->

            <!-- <div class="three_quarters">
                <div class="content_wrap">
                    <h2>The path to publication on the NHS Apps Library</h2>

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



                </div>
            </div> --> <!-- three_quarters -->
        </div>
    </div>
</div>

<script src="<?php echo get_template_directory_uri() . '/js/digital-tools/faq.js' ?>" type="text/javascript"></script>
<?php get_footer();
