  <footer>
  </footer>

  <!-- jQuery -->
  
  <script>
  var _gaq=[['_setAccount','UA-15341567-1'],['_trackPageview']];
  (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
  g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
  s.parentNode.insertBefore(g,s)}(document,'script'));
  </script>
  
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  
  <script src="/assets/javascripts/jquery/jquery.fittext.js"></script>
	<script type="text/javascript">
	  // FixText Scripts
		$(".lead-title").fitText(1.1, { minFontSize: '20px', maxFontSize: '50px' });
		$(".secondary-title").fitText(1.1, { minFontSize: '20px', maxFontSize: '40px' });
		
		// Make mobile safari address bar disappear
		window.addEventListener("load",function() {
        setTimeout(function() {
            document.body.scrollTop || window.scrollTo(0, 1);
        }, 0);
    });
	</script>

  </body>
</html>