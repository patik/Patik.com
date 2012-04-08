<?php
# require_once('../inc/html.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/inc/html.php');

function print_page_body()
{
  ?>
  <div id="turkey-main" role="main">
    
    <h1>About Me</h1>
    
    <section>
      <h2>Background</h2>
      <p>I'm a web applications developer and graduate of <a href="http://www.ecse.rpi.edu/">Computer &amp; Systems Engineering</a> at <a href="http://www.rpi.edu/">RPI</a>. I love to travel, but my home is permanently in Upstate, NY. I'm a big fan of football (soccer) worldwide, especially <a href="http://www.arsenal.com/">Arsenal</a>, <a href="http://www.fcbarcelona.com/web/english/">Barcelona</a>, and <a href="http://www.fcbayern.t-com.de/en/">Bayern Munich</a>.</p>
    </section>
    
    <section>
      <h2>Contact</h2>
      <ul>
        <li>e-mail: cra<span>i</span>g<span>@pat</span>ik.<span>com</span></li>
        <li><a href="http://www.facebook.com/craigpatik">Facebook</a></li>
        <li>Twitter: <a href="http://twitter.com/craigpatik">@craigpatik</a> and <a href="http://twitter.com/SoccerTorte">@SoccerTorte</a></li>
      </ul>
    </section>
  </div>
  <?php
}

$x = new Print_html();
$x->name = 'about';
$x->section = 'about';
$x->pageTitle = 'About';
$x->dirLevel = 1;

# ajax request
if ((!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest') || !empty($_GET['return'])) {
	print_page_body();
}
# navigated directly
else {
	$x->redirect = true;
}

$x->print_full_page();

?>