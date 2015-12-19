<?php /* Template Name: Protest Materials Page */ ?>

<?php get_header(); ?>


<h2><?php the_title(); ?></h2>


<ul class="protest_examples">
	<li>
		<a href="<?php bloginfo( 'url' )?>/wp-content/themes/sya/downloads/ButtonKit.zip">
			<img src="<?php bloginfo( 'url' )?>/wp-content/themes/sya/img/button_example.jpg"/>
			<h3>Button Party Kit</h3>
			<p>Includes: template, logo pack, instructions, print-ready sheets</p>
			<span class="download">Download</span>
		</a>
	</li>
	<li>
		<a href="<?php bloginfo( 'url' )?>/wp-content/themes/sya/downloads/PosterKit.zip">
			<img src="<?php bloginfo( 'url' )?>/wp-content/themes/sya/img/poster_example.jpg"/>
			<h3>Postering Kit</h3>
			<p>Includes: template, logo pack, instructions, print-ready sheets</p>
			<span class="download">Download</span>
		</a>
	</li>
	<li>	
		<a href="<?php bloginfo( 'url' )?>/wp-content/themes/sya/downloads/LogoPack.zip">
			<img src="<?php bloginfo( 'url' )?>/wp-content/themes/sya/img/shirt_example.jpg"/>
			<h3>Custom Kit</h3>
			<p>Includes: logo pack. DIY!</p>
			<span class="download">Download</span>
		</a>
	</li>
	<li>	
		<a href="<?php bloginfo( 'url' )?>/wp-content/themes/sya/downloads/SYA_handbill.pdf">
			<img style="border: 1px solid #333" src="<?php bloginfo( 'url' )?>/wp-content/themes/sya/img/handbill.png"/>
			<h3>Handbill</h3>
			<p>8.5" x 11" flyer to print and share</p>
			<span class="download">Download</span>
		</a>
	</li>		
</ul>


<?php get_footer(); ?>
