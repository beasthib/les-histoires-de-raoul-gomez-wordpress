<?php get_header(); ?>

<div class="hero-content container">
	<h1 class="hero-title"><?php wp_title( '', true ); ?></h1>
</div>

<div class="container" style="position:relative; z-index:4; padding-bottom:80px; background:#fff; border-radius:24px; margin-top:20px;">
	<?php
	if ( have_posts() ) :
		while ( have_posts() ) :
			the_post();
			?>
			<article <?php post_class( 'entry' ); ?>>
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<div><?php the_excerpt(); ?></div>
			</article>
			<?php
		endwhile;
	else :
		?>
		<p><?php esc_html_e( 'Aucun contenu pour le moment.', 'raoul-gomez' ); ?></p>
		<?php
	endif;
	?>
</div>

<?php get_footer(); ?>
