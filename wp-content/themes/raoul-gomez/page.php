<?php get_header(); ?>

<div class="hero-content container">
	<h1 class="hero-title"><?php the_title(); ?></h1>
</div>

<div class="container" style="position:relative; z-index:4; padding:32px; padding-bottom:80px; background:#fff; border-radius:24px; margin-top:20px; box-shadow:0 10px 30px rgba(0,0,0,0.08);">
	<?php
	while ( have_posts() ) :
		the_post();
		the_content();
	endwhile;
	?>
</div>

<?php get_footer(); ?>
