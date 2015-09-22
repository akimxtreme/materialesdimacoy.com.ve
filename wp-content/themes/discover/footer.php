<!--footer-->
	
<!--<div id="footer-container">-->
	<!--footer container-->
	<!--
	<div class="row">
		
		<div class="twelve columns" id="footer-widget">
	-->
	
			<?php
			//get_sidebar( 'footer' );
			?>
	<!--		
			</div>
	-->
			<!--footer widget end-->
			
		<!--</div>-->
		<!-- footer container-->
				
	<!--</div>-->
			<div id="footer-info">

				<!--footer container--><div class="row">
				
		<div class="twelve columns">					
			
			<div id="copyright"><?php _e( 'Copyright', 'discover' ); ?> <?php echo date( 'Y' ); ?> <?php echo esc_html(of_get_option('footer_cr')); ?><a href="http://www.materialesdimacoy.com.ve/webmail">.</a><div>
					
				</div>	
			</div>		
			</div><!--footer info end-->
	
	<?php wp_footer(); ?>

<!-- codigo google analitycs -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-41556612-1', 'skd.com.ve');
  ga('send', 'pageview');

</script>

</body>

</html>