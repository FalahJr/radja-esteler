<?php

use yii\helpers\Html;

$this->title = $detail_wisata['judul'] . ' | Wonosalam';
?>

<!-- Start of Content -->
<section id="detail-wisata-page">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-7 ">
				<center>
					<h2 class="font-weight-bold mb-3"><?= $detail_wisata['judul'] ?></h2>
					<div id="demo" class="carousel slide mb-3" data-ride="carousel">

						<!-- Indicators -->

						<!-- The slideshow -->
						<div class="carousel-inner">
							<div class="carousel-item active">
								<!-- <img src="assets/img/card-blog.png" alt="Los Angeles"> -->
								<?= Html::img('../../uploads/image/' . $detail_wisata['gambar'] . '', ['width' => '80%']) ?>
							</div>
						</div>


					</div>
					<div>
						<p align="justify" class="slide-text nunitoRegular">
							<?= $detail_wisata['deskripsi'] ?>
							<br><br>

						</p>

					</div>
					
				</center>
			</div>
			<!-- <div class="col-lg-1"></div> -->
			<div class="col-lg-5 sidebar nunitoRegular">
				<div class="informasi mt-4">
					<h5 class="font-weight-bold">Maps</h5>
					<div id="map" style="width: 95%; height: 241px;z-index:1"></div>

					<script>

const map = L.map('map').setView([<?php echo $detail_wisata->latitude_y.','.$detail_wisata->longitude_x; ?>], 14);

const tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(map);

// const marker = L.marker([-7.157146, 112.655112]).addTo(map)
//     .bindPopup('<b>Hello world!</b><br />I am a popup.').openPopup();
//     const marker2 = L.marker([-7.042657, 112.566709]).addTo(map);


var alam = new L.Icon({
  iconUrl: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-green.png',
  shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/images/marker-shadow.png',
  iconSize: [25, 41],
  iconAnchor: [12, 41],
  popupAnchor: [1, -34],
  shadowSize: [41, 41]
});

var religi = new L.Icon({
  iconUrl: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-yellow.png',
  shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/images/marker-shadow.png',
  iconSize: [25, 41],
  iconAnchor: [12, 41],
  popupAnchor: [1, -34],
  shadowSize: [41, 41]
});

var buatan = new L.Icon({
  iconUrl: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-blue.png',
  shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/images/marker-shadow.png',
  iconSize: [25, 41],
  iconAnchor: [12, 41],
  popupAnchor: [1, -34],
  shadowSize: [41, 41]
});

var budaya = new L.Icon({
  iconUrl: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-red.png',
  shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/images/marker-shadow.png',
  iconSize: [25, 41],
  iconAnchor: [12, 41],
  popupAnchor: [1, -34],
  shadowSize: [41, 41]
});
<?php 
    // foreach ($wisata_map as $list_wisata) {
        ?>
 L.marker([<?php echo $detail_wisata->latitude_y.','.$detail_wisata->longitude_x; ?>] , {icon: <?php if ($detail_wisata->wisata_kategori_id == 1) {
    echo 'alam';
 } elseif($detail_wisata->wisata_kategori_id == 2) {
    echo 'religi';
 } elseif ($detail_wisata->wisata_kategori_id == 3) {
    echo 'buatan';
 } else  {
    echo 'budaya';
 }
  ?>}).addTo(map)
.bindPopup(`<?php echo 'Nama Wisata : '.$detail_wisata['judul'].'<br> Kategori : '.$detail_wisata->wisataKategori->nama; ?>`);
// .bindPopup('<b>Hello world!</b><br />I am a popup.').openPopup();



 <?php

// }
 ?>


map.on('click', onMapClick);

</script>
					<div class="auth-detail mt-3">
					<div class="d-flex gap-2">
					<h6 class="font-weight-bold">Google Maps : 
							
					<a href="<?= $detail_wisata['url_maps'] ?>"> <?= $detail_wisata['url_maps'] ?></a>
					</h6>
						</div>
						<div class="d-flex align-items-center">
							
							<h6 class="nunitoSemiBold my-0">Alamat : <?= $detail_wisata['alamat'] ?></h6>
						</div>
					</div>
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