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
  <?php // Chrome Frame
     $path = $_SERVER['DOCUMENT_ROOT'];
     $path .= "/section/navigation.php";
     include_once($path);
  ?>
  <div id="masthead-wrapper">
    <div class="container">
      <div id="logo-circle">
        <object data="/assets/images/logo-circle.svg" type="image/svg+xml"></object>
      </div>
      <section class="main-content">
        <h1>Boompah is a User Interface &amp; Development Boutique created by Ryan Bollenbach and is based in Winnipeg, Canada.</h1>
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
        <div class="panel">
          <div class="image-placeholder"></div>
          <p>Diamond education, sister site of <a href="http://ice.com" target="_blank" title="Online Jewelry Shop">ice.com.</a></p>
          <p class="cta"><a href="http://diamond.com" target="_blank" title="Diamond.com - Jewelry Education">Live site</a> <span class="link-split">|</span> <a href="/views/work/diamond">Case Study</a></p>
        </div>
        <div class="panel">
          <div class="image-placeholder"></div>
          <p>International audio equipment distributor</p>
          <p class="cta"><a href="/views/work/skullycandy">Case Study</a></p>
        </div>
        <div class="panel last">
          <div class="image-placeholder"></div>
          <p>Quebec based Hollywood gossip blog</p>
          <p class="cta"><a href="http://hollywoodpq.com" target="_blank" title="Hollywood PQ">Live site</a> <span class="link-split">|</span> <a href="/views/work/diamond">Case Study</a></p>
        </div>
      </div><?php // row ?>
      <div class="row">
        <div class="panel">
          <div class="image-placeholder"></div>
          <p>Montreal based Photographer</p>
          <p class="cta"><a href="http://diamond.com" target="_blank" title="Diamond.com - Jewelry Education">Live site</a> <span class="link-split">|</span> <a href="/views/work/diamond">Case Study</a></p>
        </div>
        <div class="panel">
          <div class="image-placeholder"></div>
          <p>Montreal Art Collective</p>
          <p class="cta"><a href="http://diamond.com" target="_blank" title="Diamond.com - Jewelry Education">Live site</a> <span class="link-split">|</span> <a href="/views/work/diamond">Case Study</a></p>
        </div>
        <div class="panel last">
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
        <div class="panel">
          <div class="image-placeholder"></div>
          <h3>Graphic Design</h3>
          <ul>
            <li><a href="" title="Logo Design">Logo Design</a></li>
            <li><a href="" title="Web Design">Web Design</a></li>
            <li><a href="" title="Style Guides">Style Guides</a></li>
            <li><a href="" title="Business Cards">Business Cards</a></li>
            <li><a href="" title="iAB Advertisements">iAB Advertisements</a></li>
            <li><a href="" title="Media Kits">Media Kits</a></li>
          </ul>
        </div><?php // panel one-third ?>
        <div class="panel">
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
        <div class="panel">
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
  <div class="showcase">
    <div class="container">
      <h2>We've worked with</h2>
      <div class="row">
        <div class="clients">
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
        <div class="clients">
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
        <div class="clients">
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
        <div class="clients">
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
  <div class="showcase light-bg usability-research">
    <div class="container">
      <h2>Usability Research</h2>
      <p class="intro">It's one thing to design based on personal preference, assumptions, common mental models and trends. It’s a whole different ball game to use evidence at the base of your conceptual decisions while maintaining an open floor of innovation. We gather research to help reinforce our ideas.</p>
      <h3>Recent findings</h3>
      <a href="">How changing a single word increased click through rate by 161%</a>
      <p>Veeam Case Study by Siddharth Deswal</p>

      <a href="">When Instinct Trumps Reason - Jonah Lehrer</a>
      <p>Jonah Lehrer, author of How We Choose, discusses the limitations of rational thought and explains that while the human prefrontal cortex is a "magnificent piece of machinery," it easily short circuits when given too much information.</p>

      <a href="">Responsive Web Design by Electric Pulp for O’Neill Clothing increases mobile revenue by 692.67%</a>
      <p>E-commerce case study by Electric Pulp</p>

      <a href="">DIYThemes: 102.0% improvement on email newsletter sign-up page</a>
      <p class="last">Newsletter module sign up conversion case study of removing social proof.</p>
    </div><?php // container ?>
  </div><?php // showcase ?>
  <div class="showcase testimonials">
    <div class="container">
      <h2>Testimonials</h2>
      <div class="half">
        <p>"Ryan has infectious enthusiasm and energy. My role in working with Ryan was to provide background and technical information about our product he was redesigning. He made it easy to collaborate with him over a distance of a thousand miles..."</p>
        <p class="role">
          <strong>Top qualities:</strong> Personable, High Integrity, Creative<br />
          <em>Dan collaborated with Ryan on various UX tasks</em>
        </p>
        <h4>Dan Nelson, FBS</h4>
        <p class="role">

        <p>"Ryan is a great collaborator. We had some very complex projects involving multiple team members and he was able to get up to speed on our business, engage all the people involved, and be central to the creative process. Ryan helped us achieve cleaner designs than we would have without his good communication and design skills."</p>
        <p class="role">
          <strong>Top qualities:</strong> Great Results, Personable, High Integrity<br />
          <em>Mike Managed Ryan directly.</em>
        </p>
        <h4>Michael Wurzer, FBS</h4>
      </div><?php // half ?>
      <div class="half">
        <p>"Not longer after working with Ryan, it became clear to me that he has a lot of passion for design and is committed to constantly developing his skills, both technical and creative. He also happens to be a pleasure to work with!"</p>
        <p class="role">Mani managed Ryan indirectly at Tungle(Recently acquired by BlackBerry)</p>
        <h4>Mani Ghasemlou, MBA</h4>

        <p>Ryan is a recent addition to the Tungle team. Since joining he has had a big impact. He quickly integrated into our dev team and established a solid design and front end function from nothing (before him we outsourced this). He works quickly and can take high level concepts and translate them into well
        executed wireframes and images. He is a valuable member of our team."</p>
        <p class="role">Mark managed Ryan indirectly at Tungle(Recently acquired by BlackBerry)</p>
        <h4>Mark MacLeod</h4>
      </div><?php // half ?>
    </div><?php // container ?>
  </div><?php // showcase ?>
  <?php 
     $path = $_SERVER['DOCUMENT_ROOT'];
     $path .= "/section/footer.php";
     include_once($path);
  ?>