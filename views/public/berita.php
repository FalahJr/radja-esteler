<?php

use yii\helpers\Html;

$this->title = 'Daftar Berita';
?>


<div id="team"></div>
<br>
<br>
<br>
<section class="card-wisata" id="alam_and_nature_sports">
	<div class="container">
		<div class="row title-card">
			<div class="col-lg-3 col-md-12">
				<h2 class="loraBold">Daftar Berita</h2>
			</div>
			<div class="col-lg-9 col-md-12 horizontal justify-content-center">
				<hr>
			</div>
		</div>
		<div class="row mt-5 card-content">
			<?php
			if ($berita == null) {
			?>
				<div class="col-12 mb-4 text-center">
					<h4>Tidak Ada Data</h4>
				</div>
				<?php
			} else {
				function limit_words($text, $limit)
				{
					$words = explode(' ', $text);
					if (count($words) > $limit) {
						$words = array_slice($words, 0, $limit);
						return implode(' ', $words) . '...';
					}
					return $text;
				}

				foreach ($berita as $list_berita) {


				?>
					<div class="col-lg-4 col-md-6 col-12 mb-4">
						<a href="detail-berita?id=<?= $list_berita->id ?>">
							<div class="card" style="width:335px">

								<div class="card-img-top rounded" style="background-image: url('../../uploads/image/<?= $list_berita->gambar ?>'); background-size: cover; height: 200px;"></div>

								<div class="card-body">
									<h4 class="card-title text-capitalize ">
										<?= $list_berita->judul ?>
									</h4>

									<p class="card-text text-capitalize " style="overflow:hidden;"><?= limit_words($list_berita->deskripsi, 20) ?>
								</div>
								<div class="card-footer">
									<a href="detail-berita?id=<?= $list_berita->id ?>" class="btn">Baca Selengkapnya</a>
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