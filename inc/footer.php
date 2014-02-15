  <footer id="bottom">
    <div class="container">
      <a href="/" class="circle-logo">
        <img src="/img/logo-circle.png" alt="Boompah">
      </a>
      <ul class="services hidden-mobile menu">
        <li><a href="#">Logo Design</a></li>
        <li><a href="#">Web Design</a></li>
        <li><a href="#">Style Guides</a></li>
        <li><a href="#">Business Cards</a></li>
        <li><a href="#">iAB Advertisements</a></li>
        <li><a href="#">Media Kits</a></li>
      </ul>
      <ul class="services hidden-mobile menu">
        <li><a href="#">Wireframes &amp; Prototypes</a></li>
        <li><a href="#">Responsive Web Design</a></li>
        <li><a href="#">Boutique Websites</a></li>
        <li><a href="#">Web Applications</a></li>
        <li><a href="#">E-Commerce</a></li>
        <li><a href="#">E-mail Campaigns</a></li>
      </ul>
      <ul class="nav menu">
        <li>
          <a href="#" class="searchbychar" data-target="top" onclick="return false">Top of page <i class="icon-arrow-up"></i></a></li>
        <?php include 'menu-core.php'; ?>
      </ul>
      <div class="copyright"></div>
      <p class="copyright-line">&copy; Boompah 2010  - <?php echo date("Y") ?>. All rights reserved.</p>
      <ul class="social-links menu">
        <li><a class="icon-twitter" href="http://twitter.com/gotboompah"><span class="screen-reader-text">Boompah on Twitter</span></a></li>
        <li><a href="http://ca.linkedin.com/in/ryanbollenbach" class="icon-linkedin"><span class="screen-reader-text">Boompah on LinkedIn</span></a></li>
        <li><a class="icon-instagram" href="http://instagram.com/boompah" class=""><span class="screen-reader-text">Boompah on Instagram</span></a></li>
      </ul>
    </div><?php // container ?>
  </footer><?php // footer ?>

  <?php // jQuery ?>

  <script type="type/javascript">
    var _gaq=[['_setAccount','UA-15341567-1'],['_trackPageview']];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g,s)}(document,'script'));
    
    if (/mobile/i.test(navigator.userAgent) && !window.location.hash) { window.onload = function () {
      window.scrollTo(0, 1);
    }; }
  
  </script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="/inc/js/scroll-to.js" type="text/javascript"></script>
  </body>
</html>