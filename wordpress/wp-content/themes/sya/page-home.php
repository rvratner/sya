<?php 
/**
 * 	Template Name: Sidebar/Home Page
 *
 *	This page template has a sidebar built into it, 
 * 	and can be used as a home page, in which case the title will not show up.
 *
*/
get_header(); ?>
	<div id="primary" class="row-fluid">


		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<?php 
			if (strlen(get_the_content())>0){
				$class = 'hasContent';
			} 


			?>
		<div id="content" role="main" class="<?php print $class;?>">
		
		<!-- logo -->			
		<img class="logo" src="<?php bloginfo( 'url' )?>/wp-content/themes/sya/img/logo_red.png"/>
    	
    	<!-- pulls in site tagline -->			
		<div class="banner"><?php bloginfo( 'description' );  ?></div>


					<article class="post">
						
						<div class="the-content">
							<?php the_content( );?>
							
						</div><!-- the-content -->
						
					</article>

			<?php endwhile; else : ?>
				<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>				
			


		</div><!-- #content .site-content -->
	</div><!-- #primary .content-area -->
<?php get_footer(); ?>