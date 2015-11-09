<?php /* Template Name: Video Page */ ?>

<?php get_header(); ?>

<h2><?php the_title(); ?></h2>

	<div id="primary" class="row-fluid">
		<div class="video-sidebar"><a href="">Go to youtube channel</a></div>
		<div id="content" role="main" class="video-content">
			<?php
				query_posts('cat=3');
				while (have_posts()) : the_post();?>
			
				<a class="video-thumb" href="<?php the_content(); ?>">
					<img src="https://i.ytimg.com/vi/<?php the_content(); ?>/sddefault.jpg" id="<?php the_content(); ?>"  alt="video thumbnail" />
					<span id="<?php the_content(); ?>" class="play"></span>
				</a>

				
			<?php endwhile; ?>

			<div id="video-modal">
				<a class="close" id="closeVideoBtn" href="#">X</a>
			</div><!-- #video-modal -->
		</div><!-- #content .site-content -->
	</div><!-- #primary .content-area -->

<?php get_footer(); ?>