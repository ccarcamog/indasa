<div class="container mt-5" id="galery">

	<div class="row">
		<div class="col-12">
			<div class="section-heading text-center">
				<h4>Calería</h4>
				<div class="section-heading-line"></div>
			</div>
		</div>
	</div>


	<ul class="wow fadeInUp" id="thumbnails">

		<?php for ($i = 0; $i < 6; $i++) { ?>
			<li>
				<a href="#slide<?= $i + 1 ?>">
					<img src="/img/placeholder.jpg" alt="This is caption <?= $i + 1 ?>">
				</a>
			</li>
		<?php } ?>
	</ul>
	<div class="thumb-box">
		<ul class="thumbs">
			<?php for ($i = 0; $i < 6; $i++) { ?>
				<li class="wow fadeInUp" data-wow-delay="<?= 0.2 * $i ?>s"><a href="#<?= ($i + 1) ?>" data-slide="<?= ($i + 1) ?>"><img src="/img/placeholder.jpg" alt="This is caption 1 <a href='#link'>Even with links!</a>"></a></li>
			<?php } ?>

		</ul>
	</div>

</div>