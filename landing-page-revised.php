<?php
/*
    Template Name: Landing Page Revised
*/
?>
    <?php get_header(); ?>
<script   src="https://code.jquery.com/jquery-1.12.4.min.js"   integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="   crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

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

  .wp-home__inner p {
    line-height: 1.5em
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

  .panel-hero {
    margin-bottom: 40px;
    /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#ffffff+0,e8f3f7+100 */
    background: #ffffff;
    /* Old browsers */
    background: -moz-linear-gradient(top, #ffffff 0%, #e8f3f7 100%);
    /* FF3.6-15 */
    background: -webkit-linear-gradient(top, #ffffff 0%, #e8f3f7 100%);
    /* Chrome10-25,Safari5.1-6 */
    background: linear-gradient(to bottom, #ffffff 0%, #e8f3f7 100%);
    /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#e8f3f7',GradientType=0 );
    /* IE6-9 */
  }

  @media (min-width: 641px) {
    .panel-hero {
      font-size: 19px;
    }
  }

  .panel-hero-inner {
    max-width: 1168px;
    margin: 0px auto;
    padding: 48px 16px 61px;
  }

  @media (min-width: 1040px) {
    .panel-hero-inner {
      background-image: url("../images/panel-hero-bg.png");
      background-repeat: no-repeat;
      background-position: 92% 100%;
      background-size: 500px;
    }
  }

  .panel-hero__title {
    margin-top: 16px;
    margin-bottom: 16px;
    max-width: 550px;
  }

  .panel-hero__para {
    max-width: 550px;
    margin-bottom: 24px;
  }


  .panel-hero-img {
    margin-bottom: 30px;
  }

  .panel-hero-img__img {
    width: 100%;
    display: block;
  }

  .panel-hero-img__title {
    font-size: 24px;
    background-color: #758692;
    padding: 20px 22px;
    color: #FFF;
  }

  @media (min-width: 1040px) {
    .panel-hero-img__title {
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
    background-image: url("https://govuk-elements.herokuapp.com/public/images/icon-pointer.png");
    background-repeat: no-repeat;
    background-position: 100% 50%;
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
  <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css" media="screen" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" media="screen" rel="stylesheet" />
  
        <div role="main" class="main">
            <div class="wp-home">
                <div class="wp-home__inner cf">
                    <div class="panel-hero-img">
                        <img src="<?php echo get_template_directory_uri() ?>/img/wp-header.jpg" class="panel-hero-img__img">
                        <h1 class="panel-hero-img__title">Join the NHS Apps Library</h1>
                    </div>
                    <div class="grid-row">
                        <div class="column-two-thirds">
                            <p>Are you a developer wanting to contribute to a more efficient NHS, focused on patient-led healthcare?
                                <br>
                                <br>This is where you’ll find all the information you need if you have an existing app you’d like to see included on our <a href="/">Apps Library</a></p>
                            <p><a href="/digital-tools/submit-your-app/" class="button button-start">Submit your app</a>
                            </p>
                        </div>
                        <div class="column-one-third hide-mobile">
                            <img src="<?php echo get_template_directory_uri() ?>/img/developer-be-discovered.png" style="width:100%">
                        </div>
                    </div>
                    <hr>
                    <div class="grid-row">
                        <div class="column-one-half">
                            <h2 class="heading-medium">Why get published on our Library?</h2>
                            <p>Reassure users your app is safe, secure and effective and give your product a wider reach by undertaking our assessment process.</p>
                            <p>Publication on our Apps Library puts you at the forefront of the NHS drive to harness digital technology that improves health and well-being outcomes for all as part of our <href="https://www.nhs.uk/transformation/">Empower the Person initiative</a></p>
                        </div>
                        <div class="column-one-half">
                            <h2 class="heading-medium">Getting started</h2>
                            <p>
                                This is the process you must undertake to see your app published
                                <ul class="list-bullet">
                                    <li><a href="/digital-tools/submit-your-app/">Submit your app</a></li>
                                    <li><a href="/digital-tools/register-your-interest/">Register your interest</a>
                                        <br>
                                        <br>
                                    </li>
                                    <li>Sample assessment questions:
                                        <br><a href="#">Excel format (.xlsx)</a> &nbsp;|&nbsp; <a href="#">PDF format (.pdf)</a></li>
                                </ul>
                            </p>
                        </div>
                        <div class="column-one-half">
                            <h2 class="heading-medium">What we're looking for</h2>
                            <p>
                              Our focus for this month is to assess health themes with the most significant need, but please submit your details and you will be contacted when the health priority matches the type of app you’re offering
                            </p>
                            <ul class="list-bullet">
                                <li>Maternity</li>
                                <li>Social care</li>
                                <li>Long term conditions</li>
                                <li>Cancer</li>
                                <li>Mental health</li>
                            </ul>
                        </div>
                        <div class="column-one-half">
                            <h2 class="heading-medium">How will my app be appraised?</h2>
                            <h4 style="font-weight:500; margin-bottom:8px">
                                <img src="<?php echo get_template_directory_uri() ?>/img/tick_dark-blue.png" width="24" style="position: relative; top:4px;"> NHS Approved
                            </h4>
                            <p>An app meets NHS quality standards for clinical effectiveness, safety, usability and accessibility and has a supportive evidence base</p>
                            <h4 style="font-weight:500; margin-bottom:8px">
                                <img src="<?php echo get_template_directory_uri() ?>/img/circle-dots_dark-blue-1.png" width="24" style="position: relative; top:4px;"> Being tested in the NHS
                            </h4>
                            <p>An app meets NHS quality standards for safety and usability and is being tested now with NHS patients to see if there is sufficient evidence to provide them with an NHS stamp of approval</p>
                        </div>
                    </div>
                    <div class="callout callout--muted">
                        <div class="callout__inner">
                            <h2 class="heading-medium">Testimonials</h2>
                            <div class="carousel">
                                <div class="carousel__pad">
                                    <p><i class="lede">“Our mission is to develop digital health products that help clinicians deliver excellent patient care and we are delighted by the inclusion of the GDm-health App in the NHS Library, which will help accelerate its adoption across the NHS”</i></p>
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
                            <p>If you have a query relating to your app please consult our Frequently Asked Questions or contact us for further information</p>
                            <ul class="list-bullet">
                                <li><a href="/digital-tools/frequently-asked-questions/">Frequently Asked Questions</a></li>
                                <li><a href="/contact-us/">Contact us</a></li>
                            </ul>
                        </div>
                        <div class="column-one-half">
                            <h2 class="heading-medium">Developer hub</h2>
                            <p>
                                Make use nationally defined messaging APIs to help develop your app
                            </p>
                            <ul class="list list-bullet">
                                <li><a href="/">NHS Developer Hub</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

  <!-- Slick slider -->
  
  <script>
    $(".carousel").slick({
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
