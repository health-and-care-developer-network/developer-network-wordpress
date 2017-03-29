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
        <div class="section__column-6 section__column--align-center">
            <h3 class="section__header--column">Test out your app</h3>
            <div class="section__icon">
                <img alt="Check List Symbol"
                     src="<?php echo get_stylesheet_directory_uri(); ?>/img/landing/check-list-icon.png" width="98"
                     height="66"
                     class="section__icon-contents"/>
            </div>
            <p>Find testing tools, data and guidance - <a href="#">Sandpit</a> / <a href="#">Open test</a></p>
        </div>
        <div class="section__column-6 section__column--align-center">
            <h3 class="section__header--column">Access health data</h3>
            <div class="section__icon">
                <img alt="Folder List Symbol"
                     src="<?php echo get_stylesheet_directory_uri(); ?>/img/landing/folder-list-icon.png" width="110"
                     height="96"
                     class="section__icon-contents"/>
            </div>
            <p>Download tools and source code; access data sources and services -
                <a href="https://digital.nhs.uk/GP-Systems-of-Choice">GPSoC</a>, <a
                        href="/library/systems/e-rs/">NHS eReferrals Service API</a>, <a
                        href="//www.nhs.uk/pages/home.aspx">NHS Choices</a></p>
        </div>
    </div>
</section>

<section class="section--alt-bg section--large-gap">
    <h2 class="section__header--central-large">Working with our National Systems</h2>
    <h4 class="section__subheader--central">How to gain access to National Systems and Data</h4>
    <div class="section__row">
        <div class="section__column-4 section__column--border-dotted section__column--fixed-height-1">
            <div class="section__column--container-top">
                <h3 class="section__header--column-large section__header--center">Self assessment</h3>
                <div class="section__icon section__icon--simple">
                    <img alt="Self Assessment Icon"
                         src="<?php echo get_stylesheet_directory_uri(); ?>/img/landing/self-assessment-icon.png"
                         class="section__icon-contents"/>
                </div>
                <div class="section__list">
                    <h5 class="section__header--list">Access 6 different areas</h5>
                    <ol>
                        <li>Privacy and Security</li>
                        <li>Connectivity (with other health systems)</li>
                        <li>Accessibility</li>
                        <li>Usability</li>
                        <li>Technical stability</li>
                        <li>Clinical safety standards</li>
                    </ol>
                </div>
                <a href="#" class="section__button--action">START</a>
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
    <h2 class="section__header--central">Standard and guidance library</h2>
    <p class="section__paragraph--central">
        Browser and search developer information - <a href="/library/interoperability/">Interoperability
            and Integration</a>,
        <a href="/library/save-legal-secure/">Safe, Legal and Secure</a>, <a
                href="/library/identifiers/">Identifier and Names</a>
    </p>

    <div class="section__row">
        <div class="section__column-6">
            <h3 class="section__header--column-small">Standards</h3>
            <div class="section__download">
                <div class="section__symbol section__symbol--document"></div>
                <a class="section__download-content" href="#">Access to data</a>
            </div>
            <div class="section__download">
                <div class="section__symbol section__symbol--document"></div>
                <a class="section__download-content" href="#">Personal health records</a>
            </div>
            <div class="section__download">
                <div class="section__symbol section__symbol--document"></div>
                <a class="section__download-content" href="#">Identity standards</a>
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
                       href="/learn/playing-with-fhir-tut004-deleting-a-patient/#">Playing with
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
                <a href="/community/blogs/" class="section__block-link">
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
                <a href="/community/news-events/" class="section__block-link">
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
                    <li class="footer__menu-item"><a href="#">- National Plans</a></li>
                    <li class="footer__menu-item"><a href="#">- Roadmaps</a></li>
                    <li class="footer__menu-item"><a href="#">- Terms &amp; Conditions</a></li>
                    <li class="footer__menu-item"><a href="#">- Policies</a></li>
                </ul>
                <ul>
                    <li class="footer__menu-item"><a href="#">- How to</a></li>
                    <li class="footer__menu-item"><a href="#">- Standards</a></li>
                    <li class="footer__menu-item"><a href="#">- Design principles</a></li>
                </ul>
            </nav>
        </div>

        <div class="footer__right-menu">
            <h3 class="footer__heading">Get in touch</h3>
            <nav class="footer__menu">
                <ul>
                    <li class="footer__menu-item"><a href="#">- Contact us</a></li>
                    <li class="footer__menu-item"><a href="#">- Working with us</a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>

<script type="text/javascript" src="//w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({
        publisher: "983c2eed-07b4-4136-abb6-dae9ce5acde4",
        doNotHash: false,
        doNotCopy: false,
        hashAddressBar: false
    });</script>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script>window.jQuery || document.write(\'<script src="js/libs/jquery-1.7.1.min.js"><\/script>\')</script>

<script src="<?php bloginfo('template_directory'); ?>/js/landing/promise.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/landing/fetch.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/plugins-ck.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/script-ck.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/landing/site.js"></script>
<?php wp_footer(); ?>

</body>
</html>