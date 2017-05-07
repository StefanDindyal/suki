		</div><!-- #main -->

		<footer id="footer">
			<div class="site-info">
				&copy; <?php echo date('Y'); ?> Sukiyaki Media
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div><!-- #page -->

	<script type="text/javascript">
		
	!(function($){


		$('.limit').on('click', function(){

			var vendor = $(this).find('img').attr('alt');

			dataLayer.push({'event': 'limit', 'vendor': vendor});

		});


	})(jQuery);

	</script>

	<?php wp_footer(); ?>
</body>
</html>