  <footer>
    <div class="top-wrap">
      <div class="container">
        <div class="made-in-manitoba">
          <p>Boompah is founded by Ryan Bollenbach and is based in Winnipeg, MB. We work with personal brands, small businesses and fortune 500 companies to help make awesome things happen.</p>
        </div>
        <div class="we-are-passionate">
          <p>We are passionate about helping brands tell their story through beautiful user experiences and mobile apps. We specialize in bringing content to life with out of the box ideas and <a href="http://vimeo.com/51038971" title="More Cowbell" target="_blank">more cowbell.</a></p>
        </div>
        <div class="want-more">
          <h5>Want more?</h5>
          <ul>
            <?php include 'menu-core.php'; ?>
          </ul>
        </div>
        <div class="socialize">
          <h5>Socialize</h5>
          <ul>
            <li><a href="http://facebook.com/gotboompah" target="_blank">Facebook</span></a></li>
            <li><a href="http://twitter.com/gotboompah" target="_blank">Twitter</span></a></li>
            <li><a href="http://ca.linkedin.com/in/ryanbollenbach" target="_blank">LinkedIn</span></a></li>
            <li><a href="http://instagram.com/boompah" target="_blank">Instagram</span></a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="bottom">
      <a href="/" title="Boompah"><img src="/img/footer/01-logo-circle.png" /></a>
    </div>
  </footer>

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
  <script src="/js/scroll-to.js" type="text/javascript"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
  <script src="/js/jquery.slimmenu.js" type="text/javascript"></script>
  <!-- Preloader -->
  <script type="text/javascript">
    //<![CDATA[
        $(window).load(function() { // makes sure the whole site is loaded
            $('#status').fadeOut(); // will first fade out the loading animation
            $('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website.
            $('body').delay(350).css({'overflow':'visible'});
        })
    //]]>
  </script>
  <script>
    $('ul.slimmenu').slimmenu(
    {
        resizeWidth: '800',
        collapserTitle: '',
        easingEffect:'easeInOutQuint',
        animSpeed:'medium',
        indentChildren: true,
        childrenIndenter: '&raquo;'
    });
  </script>
  </body>
</html>