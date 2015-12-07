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
		<div id="content" role="main" class="span12">
		
		<!-- logo -->			
		<img class="logo" src="<?php bloginfo( 'url' )?>/wp-content/themes/sya/img/logo_red.png"/>
    	
    	<!-- pulls in site tagline -->			
<!--     	<div class="banner"><?php bloginfo( 'description' );  ?></div>
 -->



			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


					<article class="post">
					
						<h1 class="title">
							<a href="<?php the_permalink(); // Get the link to this post ?>" title="<?php the_title(); ?>">
								<?php the_title(); // Show the title of the posts as a link ?>
							</a>
						</h1>
						
						<div class="the-content">
							<?php the_content( ); 
							// This call the main content of the post, the stuff in the main text box while composing.
							// This will wrap everything in p tags and show a link as 'Continue...' where/if the
							// author inserted a <!-- more --> link in the post body
							?>
							
						</div><!-- the-content -->
						
					</article>

			<?php endwhile; else : ?>
				<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>				
			


		</div><!-- #content .site-content -->
	</div><!-- #primary .content-area -->
<?php get_footer(); ?>