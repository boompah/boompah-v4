  <footer>
    <div class="container">
      <a href="/" class="boompah hidden-mobile">
        <span class="screen-reader-text">Boompah</span>
      </a>
      <ul class="services hidden-mobile">
        <li><a href="#">Logo Design</a></li>
        <li><a href="#">Web Design</a></li>
        <li><a href="#">Style Guides</a></li>
        <li><a href="#">Business Cards</a></li>
        <li><a href="#">iAB Advertisements</a></li>
        <li><a href="#">Media Kits</a></li>
      </ul>
      <ul class="services hidden-mobile">
        <li><a href="#">Wireframes &amp; Prototypes</a></li>
        <li><a href="#">Responsive Web Design</a></li>
        <li><a href="#">Boutique Websites</a></li>
        <li><a href="#">Web Applications</a></li>
        <li><a href="#">E-Commerce</a></li>
        <li><a href="#">E-mail Campaigns</a></li>
      </ul>
      <ul class="nav">
        <li><a name="footer-menu" href="#top">Top of page <i class="icon-arrow-up"></i></a></li>
        <?php include 'menu-core.php'; ?>
      </ul>
      <div class="copyright">
        <p>&copy; Boompah 2006 - <?php echo date("Y") ?>. All rights reserved.</p>
        <ul class="social-links">
          <li><a class="icon-twitter" href="https://twitter.com/gotboompah"><span class="screen-reader-text">Boompah on Twitter</span></a></li>
          <li><a class="icon-facebook" href="https://www.facebook.com/gotboompah"><span class="screen-reader-text">Boompah on Facebook</span></a></li>
          <li><a href="http://ca.linkedin.com/in/ryanbollenbach" class="icon-linkedin"><span class="screen-reader-text">Boompah on LinkedIn</span></a></li>
          <li><a class="icon-pinterest" href="http://pinterest.com/boompah/"><span class="screen-reader-text">Boompah on Pinterest</span></a></li>
          <li><a href="http://boompah.tumblr.com/"><span class="screen-reader-text">Boompah on Tumblr</span></a></li>
          <li><a href="http://instagram.com/boompah" class=""><span class="screen-reader-text">Boompah on Instagram</span></a></li>
        </ul>
      </div><?php // copyright ?>
    </div><?php // container ?>
  </footer><?php // footer ?>

  <!-- jQuery -->
  <script>
  var _gaq=[['_setAccount','UA-15341567-1'],['_trackPageview']];
  (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
  g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
  s.parentNode.insertBefore(g,s)}(document,'script'));
  
  if (/mobile/i.test(navigator.userAgent) && !window.location.hash) { window.onload = function () {
    window.scrollTo(0, 1);
  }; }
  
  </script>
  
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

  </body>
</html>