<?php

use yii\helpers\Html;

$this->title = $detail_berita['judul'];
?>

<!-- Start of Content -->
<section id="detail-wisata-page">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 ">
				<!-- <center> -->
				<h3 class="font-weight-bold mb-3 text-capitalize "><?= $detail_berita['judul'] ?></h3>
				<!-- </center> -->

				<div id="demo" class="carousel slide mb-3" data-ride="carousel">

					<!-- Indicators -->

					<!-- The slideshow -->
					<div class="carousel-inner mt-4">
						<div class="carousel-item active">
							<!-- <img src="assets/img/card-blog.png" alt="Los Angeles"> -->
							<?= Html::img('../../uploads/image/' . $detail_berita['gambar'] . '', ['width' => '70%',]) ?>
						</div>
					</div>


				</div>

				<div>
					<p align="left" class="slide-text nunitoRegular text-capitalize ">
						<?= $detail_berita['deskripsi'] ?>
						<br><br>

					</p>

				</div>

			</div>


		</div>
	</div>
</section>
<!-- End of Content -->

<br>
<br>
<br>
<br>
<br>