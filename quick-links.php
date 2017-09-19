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


<style>
  .boxMaxWordsPosition {
    display: none;
    background-color: #eeeeee;
    border-radius: 4px;
    border: 1px solid #aaaaaa;
    height: 75px;
    margin: 10px;

  }
  div#boxMaxWordsCounter {
    text-align: center;
    text-shadow: #bbbbbb;
    color: #666666;
    font-size: 36pt;
    vertical-align: middle;
    margin: 15px;
  }
</style>


<p>
  <div id="boxMaxWords" class="boxMaxWordsPosition">
    <div id="boxMaxWordsCounter"></div>
  </div>
</p>
