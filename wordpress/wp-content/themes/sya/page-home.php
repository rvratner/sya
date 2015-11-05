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
			<div class="banner">"Website coming soon. Meanwhile, learn more and donate at <a href="https://www.indiegogo.com/projects/shoutyourabortion#/">https://www.indiegogo.com/projects/shoutyourabortion#/</a></div>
			<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<article class="post">

						<?php if (!is_front_page()) : ?>
							<h1 class='title'>
								<?php the_title(); ?>
							</h1>
						<?php endif; ?>
										
						<div class="the-content">
							<?php the_content(); ?>
							
						</div><!-- the-content -->
						
					</article>

				<?php endwhile; ?>

			<?php else : ?>
				
				<article class="post error">
					<h1 class="404">Nothing has been posted like that yet</h1>
				</article>

			<?php endif;  ?>
		</div><!-- #content .site-content -->
	</div><!-- #primary .content-area -->
<?php get_footer(); ?>