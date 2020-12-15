<div class="container p-5">

	<div class="row">
		<div class="col-12">
			<div class="section-heading text-center">
				<h4>Galeria</h4>
				<div class="section-heading-line"></div>
			</div>
		</div>
	</div>

	<div id="gallery" class="simplegallery">
		<div class="content text-center">

			<div id="galeriaCarousel" class="carousel slide d-flex flex-column justify-content-center" data-ride="carousel">
				<div class="carousel-inner">
					<?php
					for ($i = 0; $i < 3; $i++) {
					?>
						<div class="carousel-item <?php if (!$i) echo "active" ?>">
							<img src="/img/placeholder.jpg" class="image_<?= $i + 1 ?>" style="width:400px; height:400px" />
							<p class="caption caption_<?= $i + 1 ?>"><strong>Titulo</strong><br>Descripción</p>
						</div>
					<?php
					}
					?>
				</div>
				<a class="carousel-control-prev invert-color" href="#galeriaCarousel" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only ">Previous</span>
				</a>
				<a class="carousel-control-next invert-color" href="#galeriaCarousel" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>


		</div>

		<div class="clear"></div>

		<div class="thumbnail container">
			<?php
			for ($i = 0; $i < 3; $i++) {
			?>
				<div class="thumb" data-id="<?= $i ?>" data-galeria="#galeriaCarousel">

					<img src="/img/placeholder.jpg" id="thumb_<?= ($i + 1) ?>" class="thumbs" alt="" />

				</div>
			<?php
			}
			?>


		</div>

	</div>
</div>