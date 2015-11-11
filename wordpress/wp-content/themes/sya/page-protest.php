<?php /* Template Name: Protest Materials Page */ ?>

<?php get_header(); ?>


<h2><?php the_title(); ?></h2>

<div id="pick_design" class="protest_steps">
	<h2>Step 1: Pick a Design</h2>
	<ul class="protest_examples">
		<li><img src="<?php bloginfo( 'url' )?>/wp-content/themes/sya/img/protest/cross.gif" data-href="<?php bloginfo( 'url' )?>/wp-content/themes/sya/img/protest/cross_transparent.gif" alt="cross"/></li>
	</ul>
</div>
<div id="customize_design" class="protest_steps">
	<h2>Step 2: Customize Design</h2>
<div class="design-wrap">
	<label>Pick a background color: </label><input class="jscolor" value="CCCCCC"/>
	<label>Choose text: </label>
	<select id="customizations">
		<option value="hashtag">#shoutyourabortion</option>
		<option value="sya">SYA 206</option>
		<option value="custom">Custom</option>
	</select>
	<input id="customText" type="text" placeholder="custom text">
	<div id="color_rect" >
		<div class="transparent_image">
			<span id="custom_text">
				<img class="show" id="hashtag" src="<?php bloginfo( 'url' )?>/wp-content/themes/sya/img/protest/sya_text.gif"/>
				<img id="sya" src="<?php bloginfo( 'url' )?>/wp-content/themes/sya/img/protest/sya_206.gif"/>
				<p id="custom">custom</p>
			</span>
		</div>
	</div>
</div>

</div>
<div id="download_design" class="protest_steps">
	<h2>Step 3: Download it</h2>
	<button>Download PDF</button>
	<img class="preview-pane"/>
</div>
<div id="make_design" class="protest_steps">
	<h2>Step 4: Put it on something!</h2>
</div>

<?php get_footer(); ?>
