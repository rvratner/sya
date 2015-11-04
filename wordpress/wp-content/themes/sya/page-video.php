<?php /* Template Name: Video Page */ ?>

<?php get_header(); ?>

<h2><?php the_title(); ?></h2>

	<div id="primary" class="row-fluid">
		<div class="video-sidebar"><a href="">Go to youtube channel</a></div>
		<div id="content" role="main" class="video-content">
			<?php
				query_posts('cat=3');
				while (have_posts()) : the_post();
			
				echo '<a href="#"><img src="https://i.ytimg.com/vi/';
				echo the_content();
				echo '/sddefault.jpg/></a>';
				endwhile;
			?>
<!-- http://www.youtube.com/embed/VIDEO_ID
				<iframe id="ytplayer" type="text/html" width="640" height="390"
  src="http://www.youtube.com/embed/M7lc1UVf-VE?autoplay=1&origin=http://example.com"
  frameborder="0" showinfo="0" rel="0" modestbranding="0"/> -->

		</div><!-- #content .site-content -->
	</div><!-- #primary .content-area -->


<?php get_footer(); ?>