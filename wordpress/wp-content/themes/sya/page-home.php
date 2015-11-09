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
		<img class="logo" src="<?php bloginfo( 'url' )?>/wp-content/themes/sya/img/logo.png"/>
    	
    	<!-- pulls in site tagline -->			
    	<div class="banner"><?php bloginfo( 'description' );  ?></div>


		</div><!-- #content .site-content -->
	</div><!-- #primary .content-area -->
<?php get_footer(); ?>