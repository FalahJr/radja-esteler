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
				<h2 class="loraBold">Konten</h2>
			</div>
			<div class="col-lg-9 col-md-12 horizontal justify-content-center">
				<hr>
			</div>
		</div>
		<div class="row mt-5 card-content">
			<?php
			if ($konten == null) {
			?>
				<div class="col-12 mb-4 text-center">
					<h4>Tidak Ada Data</h4>
				</div>
				<?php
			} else {
				foreach ($konten as $list_konten) {


				?>
					<div class="col-lg-4 col-md-6 col-12 mb-4">
						<div class="card" style="width:335px;height:45vh">



							<video width="335" height="240" controls>
								<source src="../../uploads/video/<?= $list_konten->video ?>" type="video/mp4">
								Your browser does not support the video tag.
							</video>

							<div class="card-body">
								<h4 class="card-title text-capitalize ">
									<?= $list_konten->judul ?>
								</h4>


							</div>

						</div>
					</div>
			<?php
				};
			}
			?>
		</div>
	</div>
</section>