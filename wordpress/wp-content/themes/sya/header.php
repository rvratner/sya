<!DOCTYPE html <?php language_attributes(); ?>>
<html>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>
	<?php bloginfo('name'); // show the blog name, from settings ?> | 
	<?php is_front_page() ? bloginfo('description') : wp_title(''); // if we're on the home page, show the description, from the site's settings - otherwise, show the title of the post or page ?>
</title>


<!-- Social Media -->
<meta property="og:url" content="http://www.shoutyourabortion.com"/>
<meta property="og:type" content="article"/>
<meta property="og:site_name" content="@shoutyrabortion"/>
<meta property="og:title" content="Shout Your Abortion"/>
<meta property="og:image" content="<?php bloginfo( 'url' )?>/wp-content/themes/sya/img/logo.png"/>
<meta property="og:description" content="A network of voices working to de-stigmatize abortion through dialogue"/>

<link rel="canonical" href="http://www.shoutyourabortion.com">

<meta name="twitter:player" content="http://www.shoutyourabortion.com"/>
<meta name="twitter:title" content="Shout Your Abortion"/>
<meta name="twitter:image:src" content="<?php bloginfo( 'url' )?>/wp-content/themes/sya/img/logo.png"/>
<meta name="twitter:description" content="A network of voices working to de-stigmatize abortion through dialogue"/>
<meta name="twitter:player:height" content="414"/>
<meta name="twitter:card" content="player"/>
<meta name="twitter:site" content="@shoutyrabortion"/>
<meta name="twitter:image:width" content="736"/>
<meta name="twitter:image:height" content="414"/>
<meta name="twitter:player:width" content="736"/>
<meta name="twitter:creator" content="@shoutyrabortion"/>

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<?php wp_head();?>

</head>

<body <?php body_class(); ?> >

<header id="masthead" class="site-header" role="banner">
	<div class="container center">

		<nav role="navigation" class="site-navigation main-navigation">
			<a id="hamburger" href="#"></a>

<!-- 			<a class="close" id="closeBtn" href="#">X</a>
 -->			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); // Display the user-defined menu in Appearance > Menus ?>
		</nav><!-- .site-navigation .main-navigation -->
	</div>
		
</header><!-- #masthead .site-header -->

<div class="sya"><!-- start the page containter -->
