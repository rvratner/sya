<?php /* Template Name: Video Page */ ?>

<?php get_header(); ?>


<h2><?php the_title(); ?></h2>
<a href="https://www.youtube.com/watch?v=8AL15Hw0yvc&feature=youtu.be&list=PLYmjq_ZuA6B3SZCnqGocXYJU_myO7bOB4" target="_blank">Visit youtube channel</a>
	<div id="primary" class="row-fluid">
		<div id="content" role="main" class="video-content">
			<!-- <div id="video-modal">
				<a class="close" id="closeVideoBtn" href="#">X</a>
			</div> -->
				<iframe  src="https://www.youtube.com/embed/8AL15Hw0yvc?list=PLYmjq_ZuA6B3SZCnqGocXYJU_myO7bOB4" frameborder="0" allowfullscreen></iframe>
				
		</div><!-- #content .site-content -->
	</div><!-- #primary .content-area -->

<?php get_footer(); ?>
