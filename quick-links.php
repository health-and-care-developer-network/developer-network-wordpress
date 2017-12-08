<h2><span class="quick-links" style="color: #333333; font-family: Open Sans;">Quick Links</span></h2>
<p><a class="q-link" href='/apps'>Apps</a></p>
<p>
  <?php
    global $post;
    // echo $post->post_name .'<br/>';
    if ($post->post_name == 'landing-page') { ?>
      <p><a class="q-link" href="/digital-tools/daq">Review the Assessment Questions</a></p>
    <?php } ?>
</p>

<?php if (get_option('q-link-faq')) { ?>
  <p><a class="q-link" href="/digital-tools/frequently-asked-questions">Frequently Asked Questions</a></p>
<?php } ?>

<?php if (get_option('q-link-ryi')) { ?>
<p><a class="q-link" href="/digital-tools/register-your-interest">Register Your Interest</a></p>
<?php } ?>
<?php if (get_option('q-link-sya')) { ?>
<p><a class="q-link" href="/digital-tools/submit-your-app">Submit Your App</a></p>
<?php } ?>


<?php if (get_option('ohdc_state')) { ?>
<p><br/></p>
<?php if (! preg_match('/Open Health Data Challenge/i', get_the_title()) ) { ?>
  <h2><span class="quick-links" style="color: #333333;">Competition</span></h2>
<?php } ?>
<p><a class="q-link" href="/digital-tools/open-health-data-challenge">Open Health Data Challenge</a></p>

<?php } ?>

<?php if (get_option('q-link-btns')) { ?>
<p><br/></p>

<?php if (! preg_match('/Submit Your App/i', get_the_title()) ) { ?>
<p class="q-link-big-buttons">
  Released your application already?<br/>
  You can have it assessed.
</p>
<p>
    <button id="btnSubmitApp" type="button" class="btn btn-md btn-default apps-landing-page">
        Assess Your App <span class="checklist-icon"></span>
    </button>
</p>
<?php } ?>

<br/>
<?php if (! preg_match('/Register Your Interest/i', get_the_title()) ) { ?>
<p class="q-link-big-buttons">
  Thinking about building your app?<br/>
</p>
<p>
    <button type="button" id="btnRegisterInterest"
            class="btn btn-md btn-default apps-landing-page">
        Register Interest <span class="mail-icon"></span>
    </button>
</p>

<?php } } ?>
