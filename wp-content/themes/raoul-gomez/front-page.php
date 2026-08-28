<?php
get_header();
$assets = get_stylesheet_directory_uri() . '/assets';
?>

<div class="hero-content container">
	<h1 class="hero-title"><?php bloginfo( 'name' ); ?></h1>
	<p class="hero-tagline">Le podcast des enfants de 3 &agrave; 6 ans</p>
	<p class="hero-credit">&Eacute;crit et r&eacute;alis&eacute; par Claire Lou Gaillard</p>
</div>

<div class="scene">
	<div class="scene-inner">

		<div class="dune"></div>

		<img class="cactus-illustration" src="<?php echo esc_url( $assets . '/cactus.png' ); ?>" alt="" />
		<span class="butterfly">&#129419;</span>

		<img class="cat-illustration" src="<?php echo esc_url( $assets . '/cat.png' ); ?>" alt="Raoul Gomez, le chat de l'histoire" />

		<div class="speech-bubble">
			<div class="speech-bubble-shadow"></div>
			<div class="speech-bubble-box">
				<p>Ecoute<br />mes histoires</p>
				<span class="speech-bubble-tail"></span>
			</div>
		</div>

		<div class="platforms">
			<a class="platform-star" href="https://www.youtube.com/@LeshistoiresdeRaoulGomez" target="_blank" rel="noopener" aria-label="YouTube">
				<img class="star-bg" src="<?php echo esc_url( $assets . '/star.png' ); ?>" alt="" />
				<img class="star-icon" src="<?php echo esc_url( $assets . '/youtube.png' ); ?>" alt="" />
			</a>
			<a class="platform-star" href="https://shows.acast.com/les-histoires-de-raoul-gomez" target="_blank" rel="noopener" aria-label="Acast">
				<img class="star-bg" src="<?php echo esc_url( $assets . '/star.png' ); ?>" alt="" />
				<img class="star-icon" src="<?php echo esc_url( $assets . '/acast.png' ); ?>" alt="" />
			</a>
			<a class="platform-star" href="https://www.deezer.com/fr/show/5691767" target="_blank" rel="noopener" aria-label="Deezer">
				<img class="star-bg" src="<?php echo esc_url( $assets . '/star.png' ); ?>" alt="" />
				<img class="star-icon star-icon-small" src="<?php echo esc_url( $assets . '/deezer.png' ); ?>" alt="" />
			</a>
			<a class="platform-star" href="https://open.spotify.com/show/5FbiWpSBGxxcfEWptm2Wcu" target="_blank" rel="noopener" aria-label="Spotify">
				<img class="star-bg" src="<?php echo esc_url( $assets . '/star.png' ); ?>" alt="" />
				<img class="star-icon star-icon-small" src="<?php echo esc_url( $assets . '/spotify.png' ); ?>" alt="" />
			</a>
		</div>

		<div class="cable-car">
			<svg class="cable-line" viewBox="0 0 600 220" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
				<line x1="0" y1="150" x2="600" y2="10" stroke="#8a8a8a" stroke-width="2" />
			</svg>
			<img class="cabin cabin-1" src="<?php echo esc_url( $assets . '/telecabine.png' ); ?>" alt="" />
			<img class="cabin cabin-2" src="<?php echo esc_url( $assets . '/telecabine.png' ); ?>" alt="" />
			<img class="cabin cabin-3" src="<?php echo esc_url( $assets . '/telecabine.png' ); ?>" alt="" />
		</div>

	</div>
</div>

</div><!-- .hero -->

<?php
$sections = array(
	'les-podcasts' => 'section-alt',
	'les-projets'  => '',
	'a-propos'     => 'section-alt',
	'contact'      => '',
);

foreach ( $sections as $slug => $extra_class ) {
	$page = get_page_by_path( $slug );
	if ( ! $page ) {
		continue;
	}
	?>
	<section id="<?php echo esc_attr( $slug ); ?>" class="content-section <?php echo esc_attr( $extra_class ); ?>">
		<div class="container content-section-inner">
			<h2><?php echo esc_html( get_the_title( $page ) ); ?></h2>
			<div class="content-section-body">
				<?php echo apply_filters( 'the_content', $page->post_content ); ?>
			</div>
		</div>
	</section>
	<?php
}
?>

<?php get_footer(); ?>
