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

  <?php 
     $path = $_SERVER['DOCUMENT_ROOT'];
     $path .= "/section/footer.php";
     include_once($path);
  ?>