<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'Radja Es Teler Sultan';
?>
<!-- Slideshow Start -->
<div class="scroll" id="home"></div>
<section id="banner" class="site-index">
    <div class="container">
        <div class="row pt-5">
            <div class="col-12 col-lg-7 align-self-center">
                <p class="textWhite d-inline animation1">Selamat Datang</p>
                <h1 class="loraBold mt-4 animation2">Di Radja Es Teler Sultan </h1>
                <p class="mt-3 desc animation3 text-capitalize ">semoga website ini dapat membantumu untuk infomasi lebih lanjut dan dapat mengenal radja es teler sultan dalam proses pembelian,</p>
                <p class="desc animation3 text-capitalize ">
                    we hope u enjoy

                </p>

            </div>
            <div class="col-8 col-lg-5 mt-5 mt-lg-0">
                <div class="animationImg ">
                    <!-- <img src="assets/img/home.png" class="rounded" width="100%" height="40%" alt=""> -->
                    <?= Html::img('@web/img/home.jpeg', ['class' => 'rounded', 'width' => '100%', 'height' => '70%']) ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Content Start -->

<!-- Portofolio Section -->
<!-- <div class="scroll" id="portofolio"></div> -->
<section class="" id="portofolios">
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
                        <a href="detail-menu?id=<?= $list_menu->id ?>">
                            <div class="card" style="width:335px">
                                <!-- <?= Html::img('../../uploads/image/' . $list_menu->gambar . '', ['class' => 'card-img-top rounded', 'width' => '100%', 'height' => '200vh']) ?> -->
                                <div class="card-img-top rounded" style="background-image: url('../../uploads/image/<?= $list_menu->gambar ?>'); background-size: cover; height: 200px;"></div>

                                <div class="card-body">
                                    <h4 class="card-title text-capitalize ">
                                        <?= $list_menu->nama ?>
                                    </h4>
                                    <h6>
                                        Rp. <?= $list_menu->harga ?>
                                    </h6>
                                    <p class="card-text text-capitalize " style="overflow:hidden;"><?= $list_menu->deskripsi ?>
                                </div>
                                <div class="card-footer">
                                    <a href="detail-menu?id=<?= $list_menu->id ?>" class="btn">Baca Selengkapnya</a>
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
    <!-- <div class="portofolio-content"> -->

    <!-- </div> -->
    <!-- </div> -->
</section>
<script>
    const map = L.map('map').setView([-7.157358, 112.656169], 10);

    const tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    }).addTo(map);

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

    // const marker = L.marker([-7.157146, 112.655112]).addTo(map)
    //     .bindPopup('<b>Hello world!</b><br />I am a popup.').openPopup();
    //     const marker2 = L.marker([-7.042657, 112.566709]).addTo(map);
    // $.getJson('../../geojson/35.geojson'), function(data){
    //     geoLayer = L.geoJson(data, {
    //         style : function(feature){
    //             return {
    //                 color : "#000",
    //                 weight : 2,
    //                 opacity : 1,
    //                 fillOpacity : 0.7
    //             }
    //         },
    //     }).addTo(map);
    // }
</script>

<!-- end Portofolio Section -->