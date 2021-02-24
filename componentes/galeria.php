<section class="container-fluid bg-gray slider-gallery" id="galery">

	<div class="row">
		<div class="col-12">
			<div class="section-heading text-center">
				<h4>Galería</h4>
				<div class="section-heading-line"></div>
			</div>
		</div>
	</div>


	<div class="container p-0">
		<ul class="wow fadeInUp" id="thumbnails">

			<?php for ($i = 0; $i < 6; $i++) { ?>
				<li>
					<a href="#slide<?= $i + 1 ?>">
						<img src="/img/grupo-aider/galeria/galeria-<?= $i + 1 ?>.jpg" alt="This is caption <?= $i + 1 ?>">
					</a>
				</li>
			<?php } ?>
		</ul>

	</div>
	<div class="container p-0">

		<div class="thumb-box wow fadeInUp ">
			<?php
			$total = 6;
			$cont = 0;
			?>
			<ul class="thumbs">
				<div id="thumbnailCarousel" class="carousel slide" data-ride="carousel" data-interval="3000">
					<div class="carousel-inner">
						<?php
						while ($cont < $total) {
						?>
							<div class="carousel-item <?= ($cont == 0) ? "active" : "" ?>">
								<?php for ($i = 0; $i < 4 && $cont < $total; $i++) { ?>
									<li class="thumblink" data-goto="<?= ($i + 1) ?>"><a href="#<?= ($i + 1) ?>"><img src="/img/grupo-aider/galeria/galeria-<?= $i + 1 ?>.jpg" alt="This is caption 1 <a href='#link'>Even with links!</a>"></a></li>
								<?php
									$cont++;
								} ?>
							</div>
						<?php } ?>
					</div>
					<a class="carousel-control-prev thumbnail-carousel-arrow-prev d-none d-md-flex svg-inverted" href="#thumbnailCarousel" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon " aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next thumbnail-carousel-arrow-next d-none d-md-flex svg-inverted" href="#thumbnailCarousel" role="button" data-slide="next">
						<span class="carousel-control-next-icon " aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</ul>
		</div>

	</div>

</section>