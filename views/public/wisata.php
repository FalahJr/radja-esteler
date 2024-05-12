<?php

use yii\helpers\Html;

$this->title = 'Wisata | Wonosalam';
?>

<section id="nav-wisata">
	<div class="container">
		<div class="row navbar navbar-expand-md sticky-top d-flex justify-content-around">
			<ul class="navbar-nav ">
				<li class="nav-item ">
					<a class="nav-link text-dark" href="wisata#alam_and_nature_sports">Alam dan Olahraga</a>
				</li>
				<li class="nav-item">
					<a class="nav-link text-dark" href="wisata#religi">Wisata Religi</a>
				</li>
				<li class="nav-item">
					<a class="nav-link text-dark" href="wisata#buatan">Wisata Buatan</a>
				</li>
				<li class="nav-item">
					<a class="nav-link text-dark" href="wisata#budaya">Wisata Budaya</a>
				</li>
			</ul>
		</div>
	</div>
</section>
<div id="team"></div>
<section class="card-wisata" id="alam_and_nature_sports">
	<div class="container">
		<div class="row title-card">
			<div class="col-lg-3 col-md-12">
				<h2 class="loraBold">Wisata Alam dan Olahraga</h2>
			</div>
			<div class="col-lg-9 col-md-12 horizontal justify-content-center">
				<hr>
			</div>
		</div>
		<div class="row mt-5 card-content">
			<?php
			if ($alam_and_nature_sports == null) {
			?>
				<div class="col-12 mb-4 text-center">
					<h4>Tidak Ada Data</h4>
				</div>
				<?php
			} else {
				foreach ($alam_and_nature_sports as $list_wisata) {


				?>
					<div class="col-lg-4 col-md-6 col-12 mb-4">
						<a href="detail-wisata?id=<?= $list_wisata->id ?>">
							<div class="card" style="width:335px">
								<?= Html::img('../../uploads/image/' . $list_wisata->gambar . '', ['class' => 'card-img-top rounded', 'width' => '100%']) ?>
								<div class="card-body">
									<h4 class="card-title">
										<?= $list_wisata->judul ?>
									</h4>
									<p class="card-text" style="overflow:hidden;height:160px;"><?= $list_wisata->deskripsi ?>
								</div>
								<div class="card-footer">
									<a href="detail-wisata" class="btn">Baca Selengkapnya</a>
								</div>
							</div>
						</a>
					</div>
			<?php
				};
			}
			?>
		</div>
	</div>
</section>
<section class="card-wisata" id="religi">
	<div class="container">
		<div class="row title-card">
			<div class="col-lg-3 col-md-12">
				<h2 class="loraBold">Wisata Religi</h2>
			</div>
			<div class="col-lg-9 col-md-12 horizontal justify-content-center">
				<hr>
			</div>
		</div>
		<div class="row mt-5 card-content">
			<?php
			if ($religi == null) {
			?>
				<div class="col-12 mb-4 text-center">
					<h4>Tidak Ada Data</h4>
				</div>
				<?php
			} else {
				foreach ($religi as $list_wisata) {


				?>
					<div class="col-lg-4 col-md-6 col-12 mb-4">
						<a href="detail-wisata?id=<?= $list_wisata->id ?>">
							<div class="card" style="width:335px">
								<?= Html::img('../../uploads/image/' . $list_wisata->gambar . '', ['class' => 'card-img-top rounded', 'width' => '100%']) ?>
								<div class="card-body">
									<h4 class="card-title">
										<?= $list_wisata->judul ?>
									</h4>
									<p class="card-text" style="overflow:hidden;height:160px;"><?= $list_wisata->deskripsi ?>
								</div>
								<div class="card-footer">
									<a href="detail-wisata" class="btn">Baca Selengkapnya</a>
								</div>
							</div>
						</a>
					</div>
			<?php
				};
			}
			?>
		</div>
	</div>
</section>

<section class="card-wisata" id="buatan">
	<div class="container">
		<div class="row title-card">
			<div class="col-lg-3 col-md-12">
				<h2 class="loraBold">Wisata Buatan</h2>
			</div>
			<div class="col-lg-9 col-md-12 horizontal justify-content-center">
				<hr>
			</div>
		</div>
		<div class="row mt-5 card-content">
			<?php
			if ($buatan == null) {
			?>
				<div class="col-12 mb-4 text-center">
					<h4>Tidak Ada Data</h4>
				</div>
				<?php
			} else {
				foreach ($buatan as $list_wisata) {


				?>
					<div class="col-lg-4 col-md-6 col-12 mb-4">
						<a href="detail-wisata?id=<?= $list_wisata->id ?>">
							<div class="card" style="width:335px">
								<?= Html::img('../../uploads/image/' . $list_wisata->gambar . '', ['class' => 'card-img-top rounded', 'width' => '100%']) ?>
								<div class="card-body">
									<h4 class="card-title">
										<?= $list_wisata->judul ?>
									</h4>
									<p class="card-text" style="overflow:hidden;height:160px;"><?= $list_wisata->deskripsi ?>
								</div>
								<div class="card-footer">
									<a href="detail-wisata" class="btn">Baca Selengkapnya</a>
								</div>
							</div>
						</a>
					</div>
			<?php
				};
			}
			?>
		</div>
	</div>
</section>
<section class="card-wisata" id="budaya">
	<div class="container">
		<div class="row title-card">
			<div class="col-lg-3 col-md-12">
				<h2 class="loraBold">Wisata Budaya</h2>
			</div>
			<div class="col-lg-9 col-md-12 horizontal justify-content-center">
				<hr>
			</div>
		</div>
		<div class="row mt-5 card-content">
			<?php
			if ($budaya == null) {
			?>
				<div class="col-12 mb-4 text-center">
					<h4>Tidak Ada Data</h4>
				</div>
				<?php
			} else {
				foreach ($budaya as $list_wisata) {


				?>
					<div class="col-lg-4 col-md-6 col-12 mb-4">
						<a href="detail-wisata?id=<?= $list_wisata->id ?>">
							<div class="card" style="width:335px">
								<?= Html::img('../../uploads/image/' . $list_wisata->gambar . '', ['class' => 'card-img-top rounded', 'width' => '100%']) ?>
								<div class="card-body">
									<h4 class="card-title">
										<?= $list_wisata->judul ?>
									</h4>
									<p class="card-text" style="overflow:hidden;height:160px;"><?= $list_wisata->deskripsi ?>
								</div>
								<div class="card-footer">
									<a href="detail-wisata" class="btn">Baca Selengkapnya</a>
								</div>
							</div>
						</a>
					</div>
			<?php
				};
			}
			?>
		</div>
	</div>
</section>
