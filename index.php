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
      <h2>Featured Work</h2>
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
      <h2>Services</h2>
      <div class="row services-points">
        <div class="panel one-third">
          <div class="image-placeholder"></div>
          <h3>Branding</h3>
          <ul>
            <li><a href="" title="Logo Design">Logo Design</a></li>
            <li><a href="" title="Web Design">Web Design</a></li>
            <li><a href="" title="Style Guides">Style Guides</a></li>
            <li><a href="" title="Business Cards">Business Cards</a></li>
            <li><a href="" title="iAB Advertisements">iAB Advertisements</a></li>
            <li><a href="" title="Media Kits">Media Kits</a></li>
          </ul>
        </div><?php // panel one-third ?>
        <div class="panel one-third">
          <div class="image-placeholder"></div>
          <h3>Interaction Design</h3>
          <ul>
            <li><a href="">Wireframes &amp; Prototypes</a></li>
            <li><a href="">Responsive Web Design</a></li>
            <li><a href="">Boutique Websites</a></li>
            <li><a href="">Web Applications</a></li>
            <li><a href="">E-Commerce</a></li>
            <li><a href="">E-mail Campaigns</a></li>
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
  <div class="showcase clients">
    <div class="container">
      <h2>We've worked with</h2>
      <div class="row">
        <div class="one-fourth">
          <ul>
            <li><a href="http://becknercontracting.com/" target="_blank">Beckner Contracting</a></li>
            <li><a href="http://www.capitalrlh.com/index-en.php" target="_blank">Capital RLH</a></li>
            <li><a href="http://oboxmedia.com/" target="_blank">Oboxmedia</a></li>
            <li><a href="http://doyoulookgood.com/index/home?lang=en" target="_blank">Doyoulookgood</a></li>
            <li><a href="http://hollywoodpq.com/" target="_blank">Hollywood PQ</a></li>
            <li><a href="https://www.facebook.com/mographtv" target="_blank">Mograph TV</a></li>
            <li><a href="http://grooveshark.com/" target="_blank">Grooveshark</a></li>
            <li><a href="https://www.flexmls.com/" target="_blank">FBS - FlexMLS</a></li>
            <li><a href="http://fellerath.com/" target="_blank">Kate Fellerath</a></li>
          </ul>
        </div><?php // one-fourth ?>
        <div class="one-fourth">
          <ul>
            <li><a href="http://pentegroup.com/" target="_blank">Pente Group</a></li>
            <li><a href="http://www.rudsak.com/" target="_blank">Rudsack</a></li>
            <li><a href="http://www.netvacations.ca/en" target="_blank">Net Vacations.ca</a></li>
            <li><a href="http://www.tungle.me/index.html" target="_blank">Tungle.me</a></li>
            <li><a href="http://cheapthrillsss.com/" target="_blank">Cheap Thrills</a></li>
            <li><a href="http://www.fieldturf.com/en/" target="_blank">Field Turf</a></li>
            <li><a href="http://www.dtelepathy.com/" target="_blank">Digital Telepathy</a></li>
            <li><a href="http://www.diamond.com/" target="_blank">Diamond.com</a></li>
          </ul>
        </div><?php // one-fourth ?>
        <div class="one-fourth">
          <ul>
            <li><a href="http://www.godynamo.com/" target="_blank">Dynamo</a></li>
            <li><a href="http://www.2m2.ca/" target="_blank">2M2</a></li>
            <li><a href="http://www.reitmans.com/" target="_blank">Reitmans</a></li>
            <li><a href="http://www.aldoshoes.com/ca-eng" target="_blank">ALDO</a></li>
            <li><a href="http://www.cineflix.com/" target="_blank">Cineflix</a></li>
            <li><a href="http://www.liberte.ca/en/nutrition-health/" target="_blank">Liberte Nutrition</a></li>
            <li><a href="http://www.osm.ca/en" target="_blank">OSM</a></li>
            <li><a href="http://www.milkshakemedia.com/" target="blank">Milkshake Media</a></li>
          </ul>
        </div><?php // one-fourth ?>
        <div class="one-fourth last">
          <ul>
            <li><a href="http://www.orangeleap.com/index.shtml" target="blank">Orange Leap</a></li>
            <li><a href="http://thebig-studio.com/" target="blank">The Big Studio</a></li>
            <li><a href="http://tracelink.com/" target="blank">Tracelink</a></li>
            <li><a href="https://www.putnam.com/" target="blank">Putnum Investments</a></li>
            <li><a href="http://www.rw-co.com/" target="blank">RW&amp;CO</a></li>
            <li><a href="http://www.tarkett.com/" target="blank">Tarkett</a></li>
            <li><a href="http://www.yellowbirdproject.com/" target="blank">Yellow Bird Project</a></li>
            <li><a href="http://www.jthreeconcepts.com/" target="blank">j3concepts</a></li>
            <li><a href="http://www.telestream.net/" target="blank">Telestream</a></li>
          </ul>
        </div><?php // one-fourth ?>
      </div><?php // row ?>
    </div><?php // container ?>
  </div><?php // showcase ?>
  <?php 
     $path = $_SERVER['DOCUMENT_ROOT'];
     $path .= "/section/footer.php";
     include_once($path);
  ?>