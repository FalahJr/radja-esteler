<?php

use yii\helpers\Html;

$this->title = $detail_menu['nama'];
?>

<!-- Start of Content -->
<section id="detail-wisata-page">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 ">
				<center>
					<h2 class="font-weight-bold mb-3 text-capitalize "><?= $detail_menu['nama'] ?></h2>
					<h4>Rp. <?= $detail_menu->harga ?></h4>
					<div id="demo" class="carousel slide mb-3" data-ride="carousel">

						<!-- Indicators -->

						<!-- The slideshow -->
						<div class="carousel-inner mt-4">
							<div class="carousel-item active">
								<!-- <img src="assets/img/card-blog.png" alt="Los Angeles"> -->
								<?= Html::img('../../uploads/image/' . $detail_menu['gambar'] . '', ['width' => '20%',]) ?>
							</div>
						</div>


					</div>
					<div>
						<p align="center" class="slide-text nunitoRegular text-capitalize ">
							<?= $detail_menu['deskripsi'] ?>
							<br><br>

						</p>

					</div>

				</center>
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