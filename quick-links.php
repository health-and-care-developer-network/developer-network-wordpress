<h2><span class="quick-links" style="color: #333333;">Quick Links</span></h2>
<p><a class="q-link" href='/apps'>Apps</a></p>
<p>
  <?php
    global $post;
    // echo $post->post_name .'<br/>';
    if ($post->post_name == 'landing-page') { ?>
      <p><a class="q-link" href="/digital-tools/daq">Review the Assessment Questions</a></p>
    <?php } ?>
</p>
<p><a class="q-link" href="/digital-tools/frequently-asked-questions">Frequently Asked Questions</a></p>
<p><a class="q-link" href="/digital-tools/register-your-interest">Register Your Interest</a></p>
<p><a class="q-link" href="/digital-tools/submit-your-app">Submit Your App</a></p>

<?php if (get_option('ohdc_state') == 1) { ?>
<p><br/></p>
<?php if (! preg_match('/Open Health Data Challenge/i', get_the_title()) ) { ?>
  <h2><span class="quick-links" style="color: #333333;">Competition</span></h2>
<?php } ?>
<p><a class="q-link" href="/digital-tools/open-health-data-challenge">Open Health Data Challenge</a></p>

<?php } ?>
