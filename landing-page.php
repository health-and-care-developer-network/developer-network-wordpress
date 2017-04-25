<?php
/*
Template Name: Landing Page
*/
?>
<?php get_header(); ?>
<section class="splash">
    <h1 class="splash__contents">
        Explore the NHS developer platform to access health data, test your apps and access our standards
    </h1>
</section>

<section class="section--large-gap">
    <h2 class="section__header--central">Use the NHS platform to create healthcare apps that matter</h2>
    <div class="section__row">
        <div class="section__column-4 section__column--align-center">
            <a href="https://digital.nhs.uk/spine/opentest" target="_blank">
            <h3 class="section__header--column">Test out your app</h3>
            <div class="section__icon">
                <img alt="Check List Symbol"
                     src="<?php echo get_stylesheet_directory_uri(); ?>/img/landing/check-list-icon.png" width="98"
                     height="66"
                     class="section__icon-contents"/>
            </div>
            </a>
            <p>Find testing tools, data and guidance - <a href="/testcentre/itk-testbench/">Sandpit</a> / <a href="https://digital.nhs.uk/spine/opentest" target="_blank">Open test</a></p>
        </div>
        <div class="section__column-4 section__column--align-center">
            <a href="/apis/">
            <h3 class="section__header--column">Access health data</h3>
            <div class="section__icon">
                <img alt="Folder List Symbol"
                     src="<?php echo get_stylesheet_directory_uri(); ?>/img/landing/folder-list-icon.png" width="110"
                     height="96"
                     class="section__icon-contents"/>
            </div>
            </a>
            <p>Download tools and source code; access data sources and services -
                <a href="https://digital.nhs.uk/GP-Systems-of-Choice">GPSoC</a>, <a
                        href="/library/systems/e-rs/">NHS eReferrals Service API</a>, <a
                        href="//www.nhs.uk/aboutNHSChoices/professionals/syndication/Pages/Webservices.aspx">NHS Choices</a></p>
        </div>
        <div class="section__column-4 section__column--align-center">
            <a href="/health-apps">
                <h3 class="section__header--column">Health Apps</h3>
                <div class="section__icon">
                    <img alt="Folder List Symbol"
                         src="<?php echo get_stylesheet_directory_uri(); ?>/img/landing/digital-tools.png" width="110"
                         height="110"
                         class="section__icon-contents"/>
                </div>
            </a>
            <p>Access tools to develop for the digital apps library. <a href="/register-your-interest">Register your interest</a>, view the <a href="/daq">Digital Assessment Questions</a>, or view the <a href="/license-agreement">License Agreement</a></p>
        </div>
    </div>
</section>

<section class="section--alt-bg section--large-gap">
    <h2 class="section__header--central-large">Mobile Health Apps and National Systems</h2>
    <h4 class="section__subheader--central">The path to publication on the Apps Library and/or connection to national infrastructure</h4>
    <div class="section__row">
        <div class="section__column-4 section__column--border-dotted section__column--fixed-height-1">
            <div class="section__column--container-top">
                <h3 class="section__header--column-large section__header--center">Digital Assessment Questions</h3>
                <div class="section__icon section__icon--simple">
                    <img alt="Self Assessment Icon"
                         src="<?php echo get_stylesheet_directory_uri(); ?>/img/landing/self-assessment-icon.png"
                         class="section__icon-contents"/>
                </div>
                <div class="section__list section__list--no-style">
                    <h5 class="section__header--list">Access 9 different areas</h5>
                    <ol>
                        <li>0. General</li>
                        <li>1. Clinical Effectiveness</li>
                        <li>2. Regulatory Approval</li>
                        <li>3. Clinical Safety</li>
                        <li>4. Privacy &amp; Confidentiality</li>
                        <li>5. Security</li>
                        <li>6. Usability &amp; Accessibility</li>
                        <li>7. Interoperability</li>
                        <li>8. Technical Stability</li>
                        <li>9. Change Management</li>
                    </ol>
                </div>
                <a href="/daq" class="section__button--action">VIEW QUESTIONS</a>
            </div>
        </div>

        <div class="section__column-4 section__column--fixed-height-1">
            <div class="section__column--container-middle">
                <div class="section__icon section__icon--simple">
                    <img alt="Validation Icon"
                         src="<?php echo get_stylesheet_directory_uri(); ?>/img/landing/validation-icon.png"
                         class="section__icon-contents"/>
                </div>
                <h3 class="section__header--column-large section__header--center">Validation</h3>
                <h5 class="section__subheader--central">Coming Soon...</h5>
            </div>
        </div>
        <div class="section__column-4 section__column--border-dotted section__column--fixed-height-1">
            <div class="section__column--container-top">
                <h3 class="section__header--column-large section__header--center">Authorisation</h3>
                <div class="section__icon section__icon--simple">
                    <img alt="Authorisation Icon"
                         src="<?php echo get_stylesheet_directory_uri(); ?>/img/landing/authorisation-icon.png"
                         class="section__icon-contents"/>
                </div>
                <div class="section__list">
                    <h5 class="section__header--list">Access to national systems and data</h5>
                    <ul>
                        <li>Citizen authentication</li>
                        <li>Health data
                            <ul>
                                <li>Blood pressure</li>
                                <li>Test results</li>
                                <li>Upcoming appointments</li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section--large-gap">
    <h2 class="section__header--central">Browse and search developer information</h2>

    <div class="section__row">
        <div class="section__column-6">
            <h3 class="section__header--column-small">Standards and Guidance</h3>
            <div class="section__download">
                <div class="section__symbol section__symbol--document"></div>
                <a class="section__download-content" href="/library/architecture/">Architecture, Design and Patterns</a>
            </div>
            <div class="section__download">
                <div class="section__symbol section__symbol--document"></div>
                <a class="section__download-content" href="/library/identifiers/">Identifiers and Names</a>
            </div>
            <div class="section__download">
                <div class="section__symbol section__symbol--document"></div>
                <a class="section__download-content" href="/library/intelligence/">Intelligence and Analytics</a>
            </div>
            <div class="section__download">
                <div class="section__symbol section__symbol--document"></div>
                <a class="section__download-content" href="/library/interoperability/">Interoperability and Integration</a>
            </div>
            <div class="section__download">
                <div class="section__symbol section__symbol--document"></div>
                <a class="section__download-content" href="/library/save-legal-secure/">Safe, Legal and Secure</a>
            </div>
            <div class="section__download">
                <div class="section__symbol section__symbol--document"></div>
                <a class="section__download-content" href="/library/systems/">Systems and Services</a>
            </div>
            <div class="section__download">
                <div class="section__symbol section__symbol--document"></div>
                <a class="section__download-content" href="/library/technologies/">Technologies, Tools and Methods</a>
            </div>
            <div class="section__download">
                <div class="section__symbol section__symbol--document"></div>
                <a class="section__download-content" href="/library/transports/">Transports and Networks</a>
            </div>
        </div>

        <div class="section__column-6">
            <h3 class="section__header--column-small">Tutorials, how-tos and case studies</h3>
            <div class="section__download-loading">Loading articles please wait...</div>
            <div class="section__download-list--dynamic section--hidden">

            </div>
            <div class="section__download-list--static section--hidden">
                <div class="section__download section__download--placeholder">
                    <div class="section__symbol section__symbol--document"></div>
                    <a class="section__download-content"
                       href="/learn/starting-to-sparql-with-twinkle/">Starting to SPARQL with
                        Twinkle</a>
                </div>
                <div class="section__download section__download--placeholder">
                    <div class="section__symbol section__symbol--document"></div>
                    <a class="section__download-content"
                       href="/learn/playing-with-fhir-tut004-deleting-a-patient/">Playing with
                        FHIR - TUT004 : Deleting a Patient
                        Resource</a>
                </div>
                <div class="section__download section__download--placeholder">
                    <div class="section__symbol section__symbol--document"></div>
                    <a class="section__download-content"
                       href="/learn/playing-with-fhir-tut003-creating-a-patient-via-code/">Playing
                        with FHIR - TUT003 : Creating a PATIENT Resource
                        (via code)</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section--large-gap section--alt-bg">
    <div class="section__row section__row--smaller">
        <div class="section__column-6">
            <div class="section--white-bg section__space--right section__rounded section__column--fixed-height-2">
                <a href="http://transformation.blog.nhs.uk" class="section__block-link">
                    <div class="section__vertical-align">
                        <div class="section__vertical-align-column">
                            <img alt="Blog Icon"
                                 src="<?php echo get_stylesheet_directory_uri(); ?>/img/landing/blog-icon.png"
                                 class="section__margin--right"/>
                        </div>
                        <div class="section__vertical-align-column">
                            <h5 class="section__header--tiny">Blogs</h5>
                            <p>Read the latest blogs from other developers</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="section__column-6">
            <div class="section--white-bg section__space--right section__rounded section__column--fixed-height-2">
                <a href="#" class="section__block-link">
                    <div class="section__vertical-align">
                        <div class="section__vertical-align-column">
                            <img alt="News Events Icon"
                                 src="<?php echo get_stylesheet_directory_uri(); ?>/img/landing/news-events-icon.png"
                                 class="section__margin--right"/>
                        </div>
                        <div class="section__vertical-align-column">
                            <h5 class="section__header--tiny">News &amp; events</h5>
                            <p>Find the next NHS event around the country</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<div class="footer">
    <div class="footer__container">
        <div class="footer__left-menu">
            <h3 class="footer__heading">Quick link to</h3>
            <nav class="footer__menu">
                <ul>
                    <li class="footer__menu-item"><a href="https://www.england.nhs.uk/digitaltechnology/info-revolution/" target="_blank">- National Plans</a></li>
                    <li class="footer__menu-item"><a href="#">- National Capabilities</a></li>
                    <li class="footer__menu-item"><a href="/license-agreement">- License Agreement</a></li>
                </ul>
            </nav>
        </div>

        <div class="footer__right-menu">
            <h3 class="footer__heading">Get in touch</h3>
            <nav class="footer__menu">
                <ul>
                    <li class="footer__menu-item"><a href="/contact-us">- Contact us</a></li>
                    <li class="footer__menu-item"><a href="/register-your-interest">- Working with us</a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>

<script src="<?php bloginfo('template_directory'); ?>/js/landing/promise.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/landing/fetch.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/landing/site.js"></script>
<?php wp_footer(); ?>

</body>
</html>
