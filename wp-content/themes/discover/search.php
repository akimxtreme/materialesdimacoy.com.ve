<?php get_header(); ?>

	<div id="subhead_container">
		
		<div class="row">

		<div class="twelve columns">
		
		<h1><?php printf( __( 'Resultados para: %s', 'discover' ), '' . get_search_query() . '' ); ?></h1>
			
			</div>	
			
	</div></div>

		<!--content-->
		<div class="row" id="content_container">
			
			<!--left col--><div class="eight columns">
		
				<div id="left-col">
		
			<?php if ( have_posts() ) : ?>
				
				<?php get_template_part( 'loop', 'search' ); ?>
<?php else : ?>

					<div class="post-head-notfound">
					
						<h1><?php _e( 'No se encontraron resultados de su búsqueda', 'discover' ); ?></h1>
					
					</div><!--head end-->
					
					<p><?php _e( 'Disculpe, no se encontró nada que coincida con su búsqueda. Por favor intente con otra palabra o producto.', 'discover' ); ?></p>
							<div id="search-header"><?php get_search_form(); ?></div><!--search header end-->
					
<?php endif; ?>
	</div> <!--left-col end-->
</div> <!--column end-->

<?php get_sidebar(); ?>

</div>
<!--content end-->
		

<?php get_footer(); ?>
