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

                      <div class="row">
                        <div class="col col-md-12 col-lg-12">
                          <h2>How to get your app on the NHS Apps Library</h2>
                          <hr style="border-top: 1px solid #d8d8d8;"/>
                          <!--
                          <p>
                              The <a href="https://apps.beta.nhs.uk/">NHS Apps Library</a> (apps.beta.nhs.uk) has
                              been launched as a beta site.
                              It provides citizens, patients and clinicians with a trusted selection of digital health,
                              care and well-being applications.
                              This enables patients and citizens to access health care related tools that have been
                              designed and tested to support the self-management and prevention
                              of health related conditions.<br/>
                          </p>
                        -->
                          <p>
                              These pages provide options to developers who have existing health apps they would like to
                              see on the NHS Apps Library. It also provides options for those who are
                              interested in the library or have an idea for a health app that they'd like to develop.<br/>
                          </p>
                          <p>
                            All apps must pass the Digital Assessment Questionnaire (DAQs) to ensure that only
                            trusted, high quality apps are available on the Apps Library. They must also be available
                            in either Apple, Google or Microsoft App Stores. The library does not host apps, it
                            provides links to the stores.<br/>
                          </p>
                          <p>
                            The NHS is working to update and enhance these pages and the experience for app developers.
                            To do this we are testing concepts, designs and user experience and we are actively seeking
                            feedback from developers.<br/>
                          </p>

                        </div> <!-- col -->
                      </div>

                      <?php if (get_option('apps-btn-bar')) { ?>
                        <p><br/></p>
                          <div class="row">
                            <div class="col col-md-6">
                              <h3>Submit an App for assessment</h3>
                              <p>
                                  <button id="btnSubmitApp" type="button" class="btn btn-md btn-default apps-landing-page">
                                      Submit<span class="checklist-icon"></span>
                                  </button>
                              </p>
                              <p>
                                If your app is in public use and is ready to be assessed using the Digital Assessment
                                Questions, please submit your app below.<br/>
                              </p>

                            </div>

                            <div class="col col-md-6">
                              <h3>Register your Interest</h3>
                              <p>
                                  <button type="button" id="btnRegisterInterest"
                                          class="btn btn-md btn-default apps-landing-page">
                                      Register Interest <span class="mail-icon"></span>
                                  </button>
                              </p>
                              <p>
                                The NHS are keen to work with developers and interested parties.
                                If you would like to be
                                involved and receive information on future updates please register your interest below.
                              </p>

                            </div>

                          </div> <!-- row -->
                      <?php } ?>

                      <?php if (get_option('apps-sya')) { ?>
                      <br/>
                      <h3>Submit an App for assessment</h3>
                      <p>
                        If your app is in public use and is ready to be assessed using the Digital Assessment
                        Questions, please submit your app below.<br/>
                      </p>
                      <p>
                          <button id="btnSubmitApp" type="button" class="btn btn-lg btn-default apps-landing-page">
                              Submit <span class="checklist-icon"></span>
                          </button>
                      </p>
                      <?php } ?>

                      <?php if (get_option('apps-diagram')) { ?>
                      <div class="row">
                        <div class="col col-md-12 col-lg-12">
                          <p>
                          <div class="app-process-key">
                              <div class="you-box"></div>
                              You&nbsp;&nbsp;&nbsp;<div class="nhs-digital-box"></div>
                              NHS Digital
                          </div>

                            <div class="app-process-container">
                                <div class="centre-text arrow">
                                    <div class="step">Step 1</div>
                                    Submit App
                                </div>
                                <div class="centre-text arrow alt">
                                    <div class="step">Step 2</div>
                                    Pre-Assess
                                </div>
                                <div class="centre-text arrow">
                                    <div class="step">Step 3</div>
                                    Complete DAQs
                                </div>
                                <div class="centre-text arrow alt">
                                    <div class="step">Step 4</div>
                                    Assess
                                </div>
                                <div class="box-with-border">
                                    <svg height="61" width="180" class="div-bg">
                                        <polygon points="1,1 140,1 160,30 140,60 1,60 24,30"
                                                 style="fill: #eeeeee; stroke: #cccccc; stroke-width: 1"/>
                                    </svg>
                                    <div class="app-process-box-text">
                                        <div class="step">Step 5</div>
                                        App Published
                                    </div>
                                </div>
                            </div> <!-- app-process-container -->
                            <svg height="30" width="160" class="box-pointer-1">
                                <line x1="1" y1="1" x2="1" y2="25" style="fill: #ffffff; stroke: #e1e1e1; stroke-width:1"/>
                                <line x1="1" y1="25" x2="160" y2="25"
                                      style="fill: #ffffff; stroke: #e1e1e1; stroke-width:1"/>
                                <line x1="160" y1="25" x2="160" y2="1"
                                      style="fill: #ffffff; stroke: #e1e1e1; stroke-width:1"/>
                                <polygon points="75,25 85,20 85,30" style="fill: #cccccc; stroke: #cccccc; stroke-width:1"/>
                            </svg>
                            <svg height="30" width="160" class="box-pointer-2">
                                <line x1="1" y1="1" x2="1" y2="25" style="fill: #ffffff; stroke: #cccccc; stroke-width:1"/>
                                <line x1="1" y1="25" x2="160" y2="25"
                                      style="fill: #ffffff; stroke: #e1e1e1; stroke-width:1"/>
                                <line x1="160" y1="25" x2="160" y2="1"
                                      style="fill: #ffffff; stroke: #e1e1e1; stroke-width:1"/>
                                <polygon points="75,25 85,20 85,30" style="fill: #e1e1e1; stroke: #e1e1e1; stroke-width:1"/>
                            </svg>
                            </p>
                        </div>
                      </div>

                    <?php } ?>

                      <div class="row">
                        <div class="col col-md-12 col-lg-12">
                          <h3>The Assessment Process Explained</h3>
                          <!--
                          <p>
                            In order to drive and maintain a high-quality offering of products on the NHS Apps Library
                              we have a <a href="/digital-tools/daq/">Digital Assessment Questionnaire</a> and review process that enables developers to
                             provide information and evidence against relevant national standards and best practices.<br/>
                          </p>
                          <p>
                            The digital assessment questionnaire and assessment review process is being tested via
                            this beta site to enable a collaboration environment for developers, health care
                            professionals and patients. This supports us in the development of a fit-for-purpose
                            process that is efficient and effective.<br/>
                          </p>
                          -->
                          <p>
                            After submitting your app for assessment
                            it will go through a pre-assessment process at NHS Digital to determine if your
                            app is suitable. Upon qualification, you will be invited to take part in the self-assessment
                            by answering the digital assessment questions.<br/>
                          </p>
                          <p>
                            Your answers will be reviewed by our subject matter experts;
                            these are specialists in various fields (regulatory, clinical safety,
                            data security etc.). Assessment timescales may vary depending on
                            how the app performs against the assessment standards.<br/>
                          </p>
                          <p>
                            When an app has successfully satisfied the assessment criteria it will go through a
                             process that will lead to publication on the NHS Apps Library. To get an indication
                             of the criteria used, you can view the
                             <a href="/digital-tools/daq/">Digital Assessment Questionnaire - Beta</a>.<br/>
                          </p>


                        </div> <!-- col -->
                      </div> <!-- row -->

                      <?php if (get_option('apps-ryi')) { ?>
                        <br/>
                        <h3>Register your Interest</h3>
                        <p>
                          The NHS are keen to work with developers and interested parties.
                          If you would like to be
                          involved and receive information on future updates please register your interest below.
                        </p>
                        <p>
                            <button type="button" id="btnRegisterInterest"
                                    class="btn btn-lg btn-default apps-landing-page">
                                Register Interest <span class="mail-icon"></span>
                            </button>
                        </p>
                      <?php } ?>

                        <?php if (get_option('apps-faq')) { ?>

                        <h2 class="large_space">Frequently Asked Questions</h2>

                        <div class="faq_content">
                            <?php hdnPosts::the_faqs('landing'); ?>
                        </div>
                      <?php } ?>

                    </div> <!-- inner - content wrap -->
                </div> <!-- three_quarters - main wrap v2 -->

            </div>
        </div>
    </div>

    <?php if (get_option('apps-faq')) { ?>
      <script src="<?php echo get_template_directory_uri() . '/js/digital-tools/faq.js' ?>" type="text/javascript"></script>
    <?php } ?>
<?php get_footer();
