  <footer>
    <div class="bottom">
      <a href="/" title="Boompah"><img src="/img/footer/01-square-boompah-logo.png" class="square-boompah-logo" alt="boompah footer logo" /></a>
    </div>
  </footer>
</div><!-- .page-border -->
  <?php // jQuery ?>

  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-15341567-1', 'auto');
  ga('send', 'pageview');
  </script>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/wow/0.1.12/wow.min.js'></script>
  <script src="/js/prism.js" type="text/javascript"></script>
  <script src="/js/shared.js" type="text/javascript"></script>
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
  </body>
</html>
