<?php /* Template Name: Video Page */ ?>

<?php get_header(); ?>


<h2><?php the_title(); ?></h2>

	<div id="primary" class="row-fluid">
		<div class="video-sidebar"><a href="https://www.youtube.com/channel/UC-zikEgBZyUu9OhbnDlTsJQ" target="_blank">Visit youtube channel</a></div>
		<div id="content" role="main" class="video-content">
			<div id="video-modal">
				<a class="close" id="closeVideoBtn" href="#">X</a>
			</div><!-- #video-modal -->
		</div><!-- #content .site-content -->
	</div><!-- #primary .content-area -->

<?php get_footer(); ?>