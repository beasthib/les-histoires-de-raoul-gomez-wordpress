<?php get_header(); ?>

<div class="hero-content container">
	<h1 class="hero-title"><?php bloginfo( 'name' ); ?></h1>
	<p class="hero-tagline">Le podcast des enfants de 3 &agrave; 6 ans</p>
	<p class="hero-credit">&Eacute;crit et r&eacute;alis&eacute; par Claire Lou Gaillard</p>
</div>

<div class="scene">
	<div class="scene-inner">

		<div class="dune"></div>

		<div class="cactus cactus-1">
			<div class="cactus-body">
				<span class="cactus-arm left"></span>
				<span class="cactus-flower"></span>
			</div>
		</div>
		<div class="cactus cactus-2">
			<div class="cactus-body">
				<span class="cactus-arm right"></span>
				<span class="cactus-flower"></span>
			</div>
		</div>
		<span class="butterfly">&#129419;</span>

		<div class="cat">
			<div class="cat-tail"></div>
			<div class="cat-body">
				<span class="cat-spot" style="width:20px;height:16px;top:20px;left:14px;"></span>
				<span class="cat-spot" style="width:16px;height:14px;top:50px;left:40px;"></span>
				<span class="cat-spot" style="width:14px;height:12px;top:70px;left:12px;"></span>
			</div>
			<div class="cat-head">
				<span class="cat-ear left"></span>
				<span class="cat-ear right"></span>
				<span class="cat-eye left"></span>
				<span class="cat-eye right"></span>
				<span class="cat-mouth"></span>
				<span class="cat-spot" style="width:12px;height:10px;top:6px;left:8px;"></span>
			</div>
		</div>

		<div class="speech-bubble">
			<div class="speech-bubble-shadow"></div>
			<div class="speech-bubble-box">
				<p>Ecoute<br />mes histoires</p>
				<span class="speech-bubble-tail"></span>
			</div>
		</div>

		<div class="platforms">
			<a class="platform-star" href="https://www.youtube.com/@LeshistoiresdeRaoulGomez" target="_blank" rel="noopener" aria-label="YouTube">
				<?php get_template_part( 'template-parts/star' ); ?>
				<span class="icon icon-youtube"></span>
			</a>
			<a class="platform-star" href="#" target="_blank" rel="noopener" aria-label="Acast" data-platform="acast">
				<?php get_template_part( 'template-parts/star' ); ?>
				<span class="icon icon-text">Acast</span>
			</a>
			<a class="platform-star" href="#" target="_blank" rel="noopener" aria-label="Ecouter" data-platform="heart">
				<?php get_template_part( 'template-parts/star' ); ?>
				<span class="icon icon-heart"></span>
			</a>
			<a class="platform-star" href="#" target="_blank" rel="noopener" aria-label="Podcasts" data-platform="waves">
				<?php get_template_part( 'template-parts/star' ); ?>
				<span class="icon icon-waves"><span></span><span></span><span></span><span></span><span></span></span>
			</a>
		</div>

		<div class="cable-car">
			<svg viewBox="0 0 600 220" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
				<line x1="0" y1="10" x2="600" y2="150" stroke="#5a5a5a" stroke-width="2" />
				<g>
					<line x1="120" y1="59" x2="120" y2="95" stroke="#5a5a5a" stroke-width="3" />
					<rect x="90" y="95" width="60" height="45" rx="10" fill="#dff0e0" stroke="#3d3d3d" stroke-width="2" />
					<rect x="98" y="105" width="16" height="16" rx="3" fill="#bfe3c2" stroke="#3d3d3d" stroke-width="1.5" />
					<rect x="126" y="105" width="16" height="16" rx="3" fill="#bfe3c2" stroke="#3d3d3d" stroke-width="1.5" />
				</g>
				<g>
					<line x1="330" y1="94" x2="330" y2="130" stroke="#5a5a5a" stroke-width="3" />
					<rect x="300" y="130" width="60" height="45" rx="10" fill="#dff0e0" stroke="#3d3d3d" stroke-width="2" />
					<rect x="308" y="140" width="16" height="16" rx="3" fill="#bfe3c2" stroke="#3d3d3d" stroke-width="1.5" />
					<rect x="336" y="140" width="16" height="16" rx="3" fill="#bfe3c2" stroke="#3d3d3d" stroke-width="1.5" />
				</g>
				<g>
					<line x1="480" y1="119" x2="480" y2="155" stroke="#5a5a5a" stroke-width="3" />
					<rect x="450" y="155" width="60" height="45" rx="10" fill="#dff0e0" stroke="#3d3d3d" stroke-width="2" />
					<rect x="458" y="165" width="16" height="16" rx="3" fill="#bfe3c2" stroke="#3d3d3d" stroke-width="1.5" />
					<rect x="486" y="165" width="16" height="16" rx="3" fill="#bfe3c2" stroke="#3d3d3d" stroke-width="1.5" />
				</g>
			</svg>
		</div>

	</div>
</div>

<?php get_footer(); ?>
