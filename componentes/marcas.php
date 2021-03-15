<section class="fplus-projects-area bg-gray section-padding-0-120" id="brands">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="section-heading text-center">
					<h4>Nuestras Marcas</h4>
					<div class="section-heading-line"></div>
				</div>
			</div>
		</div>
	</div>

	<div class="container">

		<div class="row fplus-portfolio">
			<?php
			for ($i = 0; $i < 9; $i++) {
			?>
				<!-- Single gallery Item Start -->
				<div class="col-12 col-sm-6 col-md-4 single_gallery_item branding wow fadeInUp" data-wow-delay="0.2s">
					<img src="img/grupo-aider/logo-marca-<?= $i + 1 ?>.svg" alt="">
				</div>

			<?php
			}
			?>
		</div>
</section>