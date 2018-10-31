<?php
/*
    Template Name: Landing Page Revised
*/
?>
    <?php get_header(); ?>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css" media="screen" rel="stylesheet" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" media="screen" rel="stylesheet" />
  
        <!-- Landing page styles: start -->
        <style>

            /* MISC */
            /* ########################################### */

            @media (max-width: 639px) {
                .hide-mobile {
                    display: none;
                }
            }

            .main p {
                font-size: 16px;
                margin-bottom: 20px;
            }

            .main li {
                color: #7f7f7f;
            }

            .heading-medium {
                margin-bottom: 20px;
                margin-top: 30px;
            }

            .heading-small {
                margin-bottom: 20px;
                margin-top: 30px;
                font-size: 22px;
                font-weight: 500;
            }

            .list-bullet {
                list-style: disc;
                margin: 20px 20px 40px 20px;
            }

            /* Option 2 overrides */
            .wp-home {
                background-color: #F7F9F9;
            }

            .wp-home__inner {
                background-color: #FFF;
                max-width: 1200px;
                margin: 0px auto;
                position: relative;
                padding: 0;
            }

            .wp-home__inner .grid-row {
                margin: 0px 6px;
                padding: 6px 0;
            }

            @media (min-width: 1040px) {
                .wp-home__inner .grid-row {
                    margin: 0px 16px;
                }
            }

            /* CAROUSEL */
            /* ########################################### */

            .slick-next:before, .slick-prev:before {
                color: #000 !important;
            }

            .slick-slide {
                text-align: center;
            }

            .slick-slide i {
                font-size: 24px;
                line-height: 1.25;
                font-style: italic;
            }

            .slick-dotted.slick-slider {
                margin-bottom: 0!important;
            }

            .slick-dots li button:before {
               font-size: 12px!important;
            }

            /* CALLOUT */
            /* ########################################### */

            .callout {
                background-color: #fff;
                padding: 30px 40px;
                margin: 20px 0;
            }

            .callout--muted {
                background-color: #d8dde0;
            }

            /* GRID */
            /* ########################################### */

            .grid-row {
            /* margin: 0 -15px; */
            }

            .grid-row:after, #content:after, .notice:after, .panel:after, fieldset:after, .form-section:after,
            .form-group:after, .breadcrumbs ol:after, .task-list-item:after {
                content: "";
                display: block;
                clear: both;
            }

            .grid-row:after, #content:after, .notice:after, .panel:after, fieldset:after, .form-section:after,
            .form-group:after, .breadcrumbs ol:after, .task-list-item:after {
                content: "";
                display: block;
                clear: both;
            }

            .grid-row:after, #content:after, .notice:after, .panel:after, fieldset:after, .form-section:after,
            .form-group:after, .breadcrumbs ol:after, .task-list-item:after {
                content: "";
                display: block;
                clear: both;
            }

            /* COLUMN */
            /* ########################################### */

            .column-quarter,
            .column-one-quarter {
                padding: 0 15px;
                margin-bottom: 20px;
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
            }

            @media (min-width: 641px) {
            .column-quarter,
            .column-one-quarter {
                float: left;
                width: 25%;
            }
            }

            .column-half,
            .column-one-half {
                padding: 0 15px;
                margin-bottom: 20px;
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
            }

            @media (min-width: 641px) {
            .column-half,
            .column-one-half {
                float: left;
                width: 50%;
            }
            }

            .column-third,
            .column-one-third {
                padding: 0 15px;
                margin-bottom: 20px;
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
            }

            @media (min-width: 641px) {
            .column-third,
            .column-one-third {
                float: left;
                width: 33.33333%;
            }
            }

            .column-two-thirds {
                padding: 0 15px;
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
            }

            @media (min-width: 641px) {
                .column-two-thirds {
                    float: left;
                    width: 66.66667%;
                }
            }

            .column-full {
                padding: 0 15px;
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
            }

            @media (min-width: 641px) {
            .column-full {
                float: left;
                width: 100%;
            }
            }

            /* PANEL HERO */
            /* ########################################### */

            .panel-dark-hero {
                margin-bottom: 10px;
                background-color: #005EB8;
            }

            @media (min-width: 1020px) {
                .panel-dark-hero {
                    margin-bottom: 60px;
                    background-image: linear-gradient(-87deg, #005EB8 82%, #FFFFFF 83%);
                    background-image: -moz-linear-gradient(-87deg, #005EB8 82%, #FFFFFF 83%);
                    background-image: -webkit-linear-gradient(-87deg, #005EB8 82%, #FFFFFF 83%);
                    background-image: -ms-linear-gradient(top,#005EB8, #005EB8);
                }
            }

            @media (min-width: 641px) {
                .panel-dark-hero {
                font-size: 19px;
                }
            }

            .panel-dark-hero-inner {
                max-width: 1200px;
                margin: 0px auto;
                padding: 46px 6px 46px;
            }
            @media (min-width: 1020px) {
                .panel-dark-hero-inner {
                padding: 46px 15px 0px;
                }
            }

            .panel-dark-hero__img {
                width: 550px;
                float: right;
            }

            .panel-dark-hero__title {
                margin-top: 16px;
                margin-bottom: 16px;
                max-width: 550px;
                color: #FFF;
            }

            .panel-dark-hero__para {
                max-width: 550px;
                margin-bottom: 24px;
                color: #FFF;
            }

            .panel-dark-hero-img {
                margin-bottom: 30px;
            }

            .panel-dark-hero-img__img {
                width: 100%;
                display: block;
            }

            .panel-dark-hero-img__title {
                font-size: 24px;
                background-color: #758692;
                padding: 20px 22px;
                color: #FFF;
            }

            @media (min-width: 1040px) {
                .panel-dark-hero-img__title {
                font-size: 30px;
                padding: 10px 30px;
                }
            }

            /* BUTTONS */
            /* ########################################### */

            .button {
                background-color: #00823b;
                position: relative;
                display: -moz-inline-stack;
                display: inline-block;
                padding: .526315em .789473em .263157em;
                border: none;
                -webkit-border-radius: 0;
                -moz-border-radius: 0;
                border-radius: 0;
                outline: 1px solid transparent;
                outline-offset: -1px;
                -webkit-appearance: none;
                -webkit-box-shadow: 0 2px 0 #003618;
                -moz-box-shadow: 0 2px 0 #003618;
                box-shadow: 0 2px 0 #003618;
                font-size: 1em;
                line-height: 1.25;
                text-decoration: none;
                -webkit-font-smoothing: antialiased;
                cursor: pointer;
                color: #fff;
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
                vertical-align: top;
            }

            .button:visited {
                background-color: #00823b;
            }

            .button:hover, .button:focus {
                background-color: #00692f;
            }

            .button:active {
                top: 2px;
                -webkit-box-shadow: 0 0 0 #00823b;
                -moz-box-shadow: 0 0 0 #00823b;
                box-shadow: 0 0 0 #00823b;
            }

            .button.disabled, .button[disabled="disabled"], .button[disabled] {
                zoom: 1;
                filter: alpha(opacity=50);
                opacity: 0.5;
            }

            .button.disabled:hover, .button[disabled="disabled"]:hover, .button[disabled]:hover {
                cursor: default;
                background-color: #00823b;
            }

            .button.disabled:active, .button[disabled="disabled"]:active, .button[disabled]:active {
                top: 0;
                -webkit-box-shadow: 0 2px 0 #003618;
                -moz-box-shadow: 0 2px 0 #003618;
                box-shadow: 0 2px 0 #003618;
            }

            .button:link, .button:link:focus, .button:hover, .button:focus, .button:visited {
                color: #fff;
            }

            .button:before {
                content: "";
                height: 110%;
                width: 100%;
                display: block;
                background: transparent;
                position: absolute;
                top: 0;
                left: 0;
            }

            .button:active:before {
                top: -10%;
                height: 120%;
            }

            @media (max-width: 640px) {
                .button {
                    width: 100%;
                    text-align: center;
                }
            }

            .button::-moz-focus-inner {
                border: 0;
                padding: 0;
            }

            .button:focus {
                outline: 3px solid #ffbf47;
            }

            .button[disabled="disabled"] {
                background: #00823b;
            }

            .button[disabled="disabled"]:focus {
                outline: none;
            }

            .button-start,
            .button-get-started {
                font-family: "nta", Arial, sans-serif;
                font-weight: 700;
                text-transform: none;
                font-size: 18px;
                line-height: 1.2;
                background-image: url("https://govuk-elements.herokuapp.com/public/images/icon-pointer-2x.png");
                background-repeat: no-repeat;
                background-position: 100% 50%;
                background-size: 30px 19px;
                padding: 0.36842em 2.15789em 0.21053em 0.84211em;
            }

            @media (min-width: 641px) {
                .button-start,
                .button-get-started {
                    font-size: 24px;
                    line-height: 1.25;
                }
            }

            @media only screen and (-webkit-min-device-pixel-ratio: 2), only screen and (min--moz-device-pixel-ratio: 2), only screen and (-o-min-device-pixel-ratio: 20 / 10), only screen and (min-device-pixel-ratio: 2), only screen and (min-resolution: 192dpi), only screen and (min-resolution: 2dppx) {
                .button-start,
                .button-get-started {
                    background-image: url("https://govuk-elements.herokuapp.com/public/images/icon-pointer-2x.png");
                    background-size: 30px 19px;
                }
            }

        </style>

        <!-- Landing page styles: end -->

        <div role="main" class="main">

            <!-- NHS body content: start -->
            <div class="panel-dark-hero">
                <div class="panel-dark-hero-inner">
                    <div class="grid-row">
                        <div class="column-one-half">
                            <h1 class="panel-dark-hero__title">Join the NHS Apps Library</h1>
                            <p class="panel-dark-hero__para">
                                Are you a developer wanting to contribute to a more efficient NHS, focused on patient-led healthcare? 
                                <br><br>This is where you’ll find all the information you need if you have an existing health app you’d like to see included on our 
                                <a href="https://apps.beta.nhs.uk">Apps Library</a>
                            </p>
                            <p>
                                <a href="/digital-tools/submit-your-app" class="button button-start">Submit your app</a>
                            </p>
                        </div>
                        <div class="column-one-half hide-mobile">
                            <img class="panel-dark-hero__img" src="<?php echo get_template_directory_uri() . '/img/developer-be-discovered-opt3.png' ?>" style="width: 100%">
                        </div>
                     </div>
                </div>
            </div>

            <div class="wrapper cf">
                <div class="grid-row">
                    <div class="column-one-half">
                        <h2 class="heading-medium">What we're looking for</h2>
                        <p>
                        To be put forward for assessment, your app must fit our eligibility criteria and address health themes with the most significant need.
                        These are listed below. If your app does not address one of these themes, please submit your details and we will contact you when our health priorities change.
                        </p>
                        <h4>Eligibility criteria:</h4>
                        <ul class="list-bullet">
                            <li>Apps must be patient facing</li>
                            <li>Apps must be available on the app stores (unless web-based)</li>
                            <li>Apps must not use unauthorised NHS branding</li>
                        </ul>
                        <h4>Health themes:</h4>
                        <ul class="list-bullet">
                            <li>Long-term care</li>
                            <li>Primary care</li>
                            <li>Social care</li>
                            <li>Cancer</li>
                            <li>Maternity</li>
                            <li>Mental health</li>
                        </ul>
                    </div>
                    <div class="column-one-half">
                        <h2 class="heading-medium">Getting started</h2>
                        <p>
                            This is the process you must undertake to get your app published
                            <ul class="list-bullet">
                                <li><a href="/digital-tools/submit-your-app/">Submit your app</a></li>
                                <li><a href="/digital-tools/register-your-interest/">Register your interest</a></li>
                                <li><a href="/digital-tools/daq/">Sample assessment questions</a></li>
                            </ul>
                        </p>
                    </div>
                </div>

                <hr/>

                <div class="grid-row">
                    <div class="column-two-thirds">
                        <h2 class="heading-medium">
                            Why get published on our library?
                        </h2>
                        <p>
                            Reassure users your app is safe, secure and effective and give your product a wider reach by undertaking our assessment process. 
                        </p>
                        <p>
                            Publication on our Apps Library puts you at the forefront of the NHS drive to harness digital technology that improves health and well-being outcomes for all as part of our <a href="https://www.nhs.uk/transformation/" target="_blank">Empower the Person initiative</a> 
                        </p>
                        <p>&nbsp;</p>
                    </div>
                    <div class="column-one-third">
                        <img src="<?php echo get_template_directory_uri() . '/img/developer-be-discovered.png' ?>" style="width:100%">
                    </div>
                </div>

                <hr/>

                <div class="grid-row">
                    <div class="column-two-thirds">
                        <h2 class="heading-medium">How will my app be appraised?</h2>
                    </div>
                </div>

                <div class="grid-row">
                    <div class="column-one-half">
                        <h2 class="heading-small" style="margin-top:10px; margin-bottom:10px; color: #003087"><img src="<?php echo get_template_directory_uri() . '/img/tick_dark-blue.png' ?>" width="24" style="position: relative; top:4px;"> NHS Approved</h2>
                        <p>
                            An app meets NHS quality standards for clinical effectiveness, safety, usability and accessibility and has a supportive evidence base
                        </p>
                    </div>
                    <div class="column-one-half">
                        <h2 class="heading-small" style="margin-top:10px; margin-bottom:10px; color: #003087"><img src="<?php echo get_template_directory_uri() . '/img/circle-dots_dark-blue-1.png' ?>" width="24" style="position: relative; top:4px;"> Being tested in the NHS</h2>
                        <p>An app meets NHS quality standards for safety and usability and is being tested now with NHS patients to see if there is sufficient evidence to provide them with an NHS stamp of approval</p>
                    </div>
                </div>

                <div class="callout callout--muted">
                    <div class="callout__inner">
                        <h2 class="heading-medium">Testimonials</h2>
                        <div class="carousel">
                            <div class="carousel__pad">
                                <p>
                                    <i class="lede">“Our mission is to develop digital health products that help clinicians deliver excellent patient care and we are delighted by the inclusion of the GDm-health App in the NHS Library, which will help accelerate its adoption across the NHS”</i>
                                </p>
                                <p class="heading-small">Lord Paul Drayson, Chairman and CEO, Drayson Technologies</p>
                            </div>
                            <div class="carousel__pad">
                                <p><i class="lede">“It’s fantastic to have a quarter of a million users so quickly, following Evergreen Life’s integration with NHS Digital. Our app is built upon one clear idea: ‘people powered health’”</i></p>
                                <p class="font-xsmall">Stephen Critchlow, founder and chairman of Evergreen Life</p>
                            </div>
                        </div>
                        <p>&nbsp;</p>
                    </div>
                </div>

                <div class="grid-row">
                    <div class="column-one-half">
                        <h2 class="heading-medium">Help &amp; support</h2>

                        <p>If you have a query relating to the assessment of app please consult our Frequently Asked Questions or contact us for further information</p>

                        <ul class="list-bullet">
                            <li><a href="/digital-tools/frequently-asked-questions/">Frequently Asked Questions</a></li>
                            <li><a href="mailto:enquiries@nhsdigital.nhs.uk">Contact us</a></li>
                        </ul>
                    </div>

                    <div class="column-one-half">
                        <h2 class="heading-medium">Developer hub</h2>
                        <p>
                            Make use nationally defined messaging APIs to help develop your app
                        </p>
                        <ul class="list list-bullet">
                            <li><a href="https://developer.nhs.uk">NHS Developer Hub</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- NHS body content: end -->
        </div>
        
        

        <!-- Slick slider with jQuery -->
        <script>
            jQuery(".carousel").slick({
                arrows: true,
                centerMode: true,
                responsive: true,
                centerPadding: false,
                dots: true,
                infinite: true,
                slidesToShow: 1,
                slidesToScroll: 1
            });
        </script>
        <?php get_footer(); ?>