<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	
	<!-- dataLayer -->
	<script type="text/javascript">window.dataLayer = window.dataLayer || [];</script>
	<!-- End dataLayer -->

	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-M9KBTVS');</script>
	<!-- End Google Tag Manager -->
	
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">	
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link href='//fonts.googleapis.com/css?family=Titillium+Web' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,600,400italic,600italic,700italic' rel='stylesheet' type='text/css'>
	<link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/images/favicon.png">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M9KBTVS"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<div id="page" class="hfeed site">
	<div id="header">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="Sukiyaki Media">
			<h1>
				<span id="logo" class="titillium_web">
					Sukiyaki
					<i class="icon">
						<i class="r"></i>
						<i class="g"></i>
						<i class="b"></i>
					</i>
					Media
				</span>
			</h1>
		</a>
	</div>	
	<?php if ( get_header_image() ) : ?>
		<?php
			/**
			 * Filter the default twentysixteen custom header sizes attribute.
			 *
			 * @since Twenty Sixteen 1.0
			 *
			 * @param string $custom_header_sizes sizes attribute
			 * for Custom Header. Default '(max-width: 709px) 85vw,
			 * (max-width: 909px) 81vw, (max-width: 1362px) 88vw, 1200px'.
			 */
			$custom_header_sizes = apply_filters( 'twentysixteen_custom_header_sizes', '(max-width: 709px) 85vw, (max-width: 909px) 81vw, (max-width: 1362px) 88vw, 1200px' );
		?>
		<div class="header-image-box">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
				<img src="<?php header_image(); ?>" srcset="<?php echo esc_attr( wp_get_attachment_image_srcset( get_custom_header()->attachment_id ) ); ?>" sizes="<?php echo esc_attr( $custom_header_sizes ); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
			</a>
		</div><!-- .header-image -->
	<?php endif; ?>
	<div id="main" class="site-main">