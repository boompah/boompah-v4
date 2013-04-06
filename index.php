<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/shared/header.php";
   include_once($path);
?>

<div class="masthead-wrapper home">
  <div class="container">
    
    <div id="logo-circle">
      <object data="/objects/logo-circle.svg" type="image/svg+xml"></object>
    </div>

    <section class="main-content">
      <h1 id="fittext1">Boompah is a User Interface &amp; Development Boutique founded by Ryan Bollenbach and based in Winnipeg, Canada.</h1>
      <h3>We collaborate with businesses to design elegant, fresh interfaces for web applications,
      boutique websites and e-commerce stores. We strive to create timeless designs that perform 
      beautifully across mobile, tablet and desktop devices.
      We believe in evidence driven design.</h3>
    </div>
    
  </div><?php // container ?>
</div><?php // masthead-wrapper home ?>

<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/shared/footer.php";
   include_once($path);
?>