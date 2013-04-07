<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/section/header.php";
   include_once($path);
?>
<body class="home">
  <?php // Chrome Frame
     $path = $_SERVER['DOCUMENT_ROOT'];
     $path .= "/section/chrome-frame.php";
     include_once($path);
  ?>
  <header id="header">
    <nav class="primary container">
      <a href="/" class="boompah">
        <span class="screen-reader-text">Boompah</span></a>
      <ul>
        <li><a href="/work" title="work" class="selected">Work</a></li>
      	<li><a href="/about" title="About">About</a></li>
      	<li><a href="/services" title="Services">Services</a></li>
      	<li><a href="/about" title="Tumblr">Tumblr</a></li>
      	<li><a href="/contact" title="home">Contact</a></li>
      </ul>
    </nav>
  </header>
  <div id="masthead-wrapper">
    <div class="container">
      <div id="logo-circle">
        <object data="/assets/images/logo-circle.svg" type="image/svg+xml"></object>
      </div>
      <section class="main-content">
        <h1 class="lead-title">Boompah is a User Interface &amp; Development Boutique created by Ryan Bollenbach and is based in Winnipeg, Canada.</h1>
        <h3>We collaborate with businesses to design elegant, fresh interfaces for web applications,
        boutique websites and e-commerce stores. We strive to create timeless designs that perform 
        beautifully across mobile, tablet and desktop devices.
        We believe in evidence driven design.</h3>
      </div>
    </div><?php // container ?>
  </div><?php // masthead-wrapper home ?>
  <div class="showcase">
    <div class="container">
      <h2 class="secondary-title">Featured Work</h2>
      <div class="row">
        <div class="panel one-third">
          <div class="image-placeholder"></div>
          <p>Diamond education, sister site of <a href="http://ice.com" target="_blank" title="Online Jewelry Shop">ice.com.</a></p>
          <p class="cta"><a href="http://diamond.com" target="_blank" title="Diamond.com - Jewelry Education">Live site</a> <span class="link-split">|</span> <a href="/views/work/diamond">Case Study</a></p>
        </div>
        <div class="panel one-third">
          <div class="image-placeholder"></div>
          <p>International audio equipment distributor</p>
          <p class="cta"><a href="/views/work/skullycandy">Case Study</a></p>
        </div>
        <div class="panel one-third last">
          <div class="image-placeholder"></div>
          <p>Quebec based Hollywood gossip blog</p>
          <p class="cta"><a href="http://hollywoodpq.com" target="_blank" title="Hollywood PQ">Live site</a> <span class="link-split">|</span> <a href="/views/work/diamond">Case Study</a></p>
        </div>
      </div><?php // row ?>
      <div class="row">
        <div class="panel one-third">
          <div class="image-placeholder"></div>
          <p>Montreal based Photographer</p>
          <p class="cta"><a href="http://diamond.com" target="_blank" title="Diamond.com - Jewelry Education">Live site</a> <span class="link-split">|</span> <a href="/views/work/diamond">Case Study</a></p>
        </div>
        <div class="panel one-third">
          <div class="image-placeholder"></div>
          <p>Montreal Art Collective</p>
          <p class="cta"><a href="http://diamond.com" target="_blank" title="Diamond.com - Jewelry Education">Live site</a> <span class="link-split">|</span> <a href="/views/work/diamond">Case Study</a></p>
        </div>
        <div class="panel one-third last">
          <div class="image-placeholder"></div>
          <p>Online Dating Site</p>
          <p class="cta"><a href="http://diamond.com" target="_blank" title="Diamond.com - Jewelry Education">Live site</a> <span class="link-split">|</span> <a href="/views/work/diamond">Case Study</a></p>
        </div>
      </div><?php // row ?>
      <a href="/work" class="button" title="View Portfolio">View Portfolio</a>
    </div><?php // container ?>
  </div><?php // showcase ?>
  <div class="showcase dark-bg">
    <div class="container">
      <h2 class="secondary-title">Services</h2>
      <div class="row points">
        <div class="panel one-third">
          <div class="image-placeholder"></div>
          <h3>Branding</h3>
          <ul>
            <li>Logo Design</li>
            <li>Web Design</li>
            <li>Style Guides</li>
            <li>Business Cards</li>
            <li>iAB Advertisements</li>
            <li>Media Kits</li>
          </ul>
        </div><?php // panel one-third ?>
        <div class="panel one-third">
          <div class="image-placeholder"></div>
          <h3>Interaction Design</h3>
          <ul>
            <li>Wireframes &amp; Prototypes</li>
            <li>Responsive Web Design</li>
            <li>Boutique Websites</li>
            <li>Web Applications</li>
            <li>E-Commerce</li>
            <li>E-mail Campaigns</li>
          </ul>
        </div><?php // panel one-third ?>
        <div class="panel one-third last">
          <div class="image-placeholder"></div>
          <h3>Development</h3>
          <ul>
            <li>HTML5 &amp; CSS3</li>
            <li>HAML, ERB, SASS, SCSS, LESS</li>
            <li>Javascript and jQuery</li>
            <li>Wordpress and Various CMS'</li>
            <li>E-commerce Stores</li>
          </ul>
        </div><?php // panel one-third ?>
      </div><?php // row ?>
    </div><?php // container ?>
  </div><?php // showcase ?>
  <?php 
     $path = $_SERVER['DOCUMENT_ROOT'];
     $path .= "/section/footer.php";
     include_once($path);
  ?>