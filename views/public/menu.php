<?php

use yii\helpers\Html;

$this->title = 'Daftar Menu';
?>


<div id="team"></div>
<br>
<br>
<br>
<section class="card-wisata" id="alam_and_nature_sports">
	<div class="container">
		<div class="row title-card">
			<div class="col-lg-3 col-md-12">
				<h2 class="loraBold">Daftar Menu</h2>
			</div>
			<div class="col-lg-9 col-md-12 horizontal justify-content-center">
				<hr>
			</div>
		</div>
		<div class="row mt-5 card-content">
			<?php
			if ($menu == null) {
			?>
				<div class="col-12 mb-4 text-center">
					<h4>Tidak Ada Data</h4>
				</div>
				<?php
			} else {
				foreach ($menu as $list_menu) {


				?>
					<div class="col-lg-4 col-md-6 col-12 mb-4">
						<a href="detail-wisata?id=<?= $list_menu->id ?>">
							<div class="card" style="width:335px">

								<div class="card-img-top rounded" style="background-image: url('../../uploads/image/<?= $list_menu->gambar ?>'); background-size: cover; height: 200px;"></div>

								<div class="card-body">
									<h4 class="card-title">
										<?= $list_menu->nama ?>
									</h4>
									<h6>
										Rp. <?= $list_menu->harga ?>
									</h6>
									<p class="card-text" style="overflow:hidden;"><?= $list_menu->deskripsi ?>
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