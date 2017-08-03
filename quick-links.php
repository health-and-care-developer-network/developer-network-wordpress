<h2><span class="quick-links" style="color: #333333;">Quick Links</span></h2>
<p><a class="q-link" href='/apps'>Digital Tools</a></p>
<p>
  <?php
    global $post;
    echo $post->post_name .'<br/>';
    if ($post->post_name == 'landing-page') { ?>
      <p><a class="q-link" href="/digital-tools/daq">Review the Assessment Questions</a></p>
    <?php } ?>
</p>
<p><a class="q-link" href="/digital-tools/frequently-asked-questions">Frequently Asked Questions</a></p>
<p><a class="q-link" href="/digital-tools/register-your-interest">Register Your Interest</a></p>
<p><a class="q-link" href="/digital-tools/submit-your-digital-tool">Submit Your Digital Tool</a></p>
