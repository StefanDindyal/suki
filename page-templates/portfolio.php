<?php
/*
Template Name: Portfolio
*/
get_header(); ?>
<style type="text/css">
	.mini {
		clear: both;
		margin-bottom: 70px;
	}
	.mini ul {
		text-align: center;
	}
	.mini ul li {
		float: none;
		display: inline-block;
		width: auto;
		margin: 10px !important;
	}
	section.b {
		display: none;
	}
</style>
<div id="main-content" class="main-content port">
	<nav class="mini">
		<ul>
			<li><a href="" title=""><img src="" alt="" border="0"/><span><?php the_title(); ?>'s Webfolio</span></a></li>
			<li><a href="" title=""><img src="" alt="" border="0"/><span><?php the_title(); ?>'s Artfolio</span></a></li>
		</ul>
	</nav>
	<section id="works" class="b">
		<h2 class="section-title"><?php the_title(); ?>'s Webfolio</h2>
		<ul>
			<li>
				<a href="http://www.ollymurs.com/home/" target="_blank">
					<span class="hi">
						<img src="<?php bloginfo('template_directory'); ?>/images/port/olly.png" alt="" border="0">
					</span>
					<span class="title">Olly Murs</span>
				</a>
			</li>
			<li>
				<a href="http://www.milesdavis.com/" target="_blank">
					<span class="hi">
						<img src="<?php bloginfo('template_directory'); ?>/images/port/miles.png" alt="" border="0">
					</span>
					<span class="title">Miles Davis</span>
				</a>
			</li>
			<li>
				<a href="http://www.sonymusiclatin.com/" target="_blank">
					<span class="hi">
						<img src="<?php bloginfo('template_directory'); ?>/images/port/latin.png" alt="" border="0">
					</span>
					<span class="title">Sony Music Latin</span>
				</a>
			</li>				
		</ul>
		<div class="clear"></div>
	</section>
	<section id="works" class="b">
		<h2 class="section-title"><?php the_title(); ?>'s Artfolio</h2>
		<ul>
			<li>
				<a href="http://www.ollymurs.com/home/" target="_blank">
					<span class="hi">
						<img src="<?php bloginfo('template_directory'); ?>/images/port/olly.png" alt="" border="0">
					</span>
					<span class="title">Olly Murs</span>
				</a>
			</li>
			<li>
				<a href="http://www.milesdavis.com/" target="_blank">
					<span class="hi">
						<img src="<?php bloginfo('template_directory'); ?>/images/port/miles.png" alt="" border="0">
					</span>
					<span class="title">Miles Davis</span>
				</a>
			</li>
			<li>
				<a href="http://www.sonymusiclatin.com/" target="_blank">
					<span class="hi">
						<img src="<?php bloginfo('template_directory'); ?>/images/port/latin.png" alt="" border="0">
					</span>
					<span class="title">Sony Music Latin</span>
				</a>
			</li>				
		</ul>
		<div class="clear"></div>
	</section>
</div><!-- #main-content -->
<?php
get_footer();
