<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div class="hero" id="accueil">

	<span class="sparkle" style="top:8%; left:5%; font-size:1.1rem;">&#10022;</span>
	<span class="sparkle" style="top:32%; left:22%; font-size:1rem;">&#10022;</span>
	<span class="sparkle" style="top:14%; left:82%;">&#10022;</span>

	<svg class="cloud cloud-1" viewBox="0 0 300 120" xmlns="http://www.w3.org/2000/svg">
		<g fill="#fff">
			<ellipse cx="60" cy="72" rx="58" ry="42" />
			<ellipse cx="128" cy="46" rx="54" ry="48" />
			<ellipse cx="198" cy="70" rx="62" ry="40" />
			<ellipse cx="148" cy="92" rx="108" ry="30" />
		</g>
	</svg>
	<svg class="cloud cloud-2" viewBox="0 0 300 120" xmlns="http://www.w3.org/2000/svg">
		<g fill="#fff">
			<ellipse cx="60" cy="72" rx="58" ry="42" />
			<ellipse cx="128" cy="46" rx="54" ry="48" />
			<ellipse cx="198" cy="70" rx="62" ry="40" />
			<ellipse cx="148" cy="92" rx="108" ry="30" />
		</g>
	</svg>

	<svg class="bat" viewBox="0 0 64 40" fill="none" xmlns="http://www.w3.org/2000/svg">
		<path d="M32 14c-4-10-16-13-24-8 6 1 10 4 12 8-6 0-11 3-14 9 6-2 11-2 15 1-3 3-4 7-3 12 4-5 8-8 14-9 6 1 10 4 14 9 1-5 0-9-3-12 4-3 9-3 15-1-3-6-8-9-14-9 2-4 6-7 12-8-8-5-20-2-24 8z" fill="#7a4fa0"/>
	</svg>

	<header class="site-header">
		<div class="container header-inner">
			<div class="avatar-badge">
				<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/avatar-cat.png' ); ?>" alt="<?php esc_attr_e( 'Raoul Gomez', 'raoul-gomez' ); ?>" />
			</div>

			<?php
			if ( has_nav_menu( 'primary' ) ) {
				wp_nav_menu(
					array(
						'theme_location' => 'primary',
						'container'      => false,
						'items_wrap'     => '<ul class="main-nav">%3$s</ul>',
					)
				);
			} else {
				?>
				<ul class="main-nav">
					<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Accueil</a></li>
					<li><a href="#">Les podcasts</a></li>
					<li><a href="#">Les projets</a></li>
					<li><a href="#">A propos</a></li>
					<li><a href="#">Contact</a></li>
				</ul>
				<?php
			}
			?>
		</div>
	</header>
