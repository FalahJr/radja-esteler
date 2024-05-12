<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'SIGESIT';
?>
<!-- Slideshow Start -->
<div class="scroll" id="home"></div>
<section id="banner" class="site-index">
    <div class="container">
        <div class="row pt-5">
            <div class="col-12 col-lg-7 align-self-center">
                <p class="textWhite d-inline animation1">Selamat Datang</p>
                <h1 class="loraBold mt-4 animation2">Di Radja Es Teler Sultan </h1>
                <p class="mt-3 desc animation3">Semoga Website ini dapat membantu masyarakat luas untuk lebih
                    mengenal wisata di Gresik</p>
                <p class="desc animation3">
                    Let's explore one of the cities in Indonesia which is known as an industrial city
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
    <!-- <div class="portofolio-content"> -->
    <div class="container">
        <!-- <center> -->
        <div class="row">
            <div class="col-12 mb-5 d-flex justify-content-center">
                <h2 class="loraSemiBold">PETA WISATA KABUPATEN GRESIK</h2>
            </div>
        </div>
        <!-- </center> -->

        <!-- <div class="row justify-content-center d-flex"> -->

        <!-- </div> -->
        <div class="row justify-content-center d-flex">
            <div class="text-maps mt-4 ">
                <h5>Alamat Kantor Bupati Gresik</h5>
                <p>Jl. DR. Wahidin Sudiro Husodo No.245-c, Kembangan, Kec. Kebomas, Kabupaten Gresik, Jawa Timur 61124
                </p>
                <hr style="border: 1px solid #0B3F68B2;">
                <p>
                    Lokasi Kabupaten Gresik terletak di sebelah Barat Laut Kota Surabaya yang merupakan Ibukota Propinsi Jawa Timur dengan luas wilayah 1.191,25 km2 yang terbagi dalam 18 kecamatan, 330 desa, dan 26 kelurahan. Secara geografis wilayah Kabupaten Gresik terletak antara 112Â° sampai 113Â° Bujur Timur dan 7Â° sampai 8Â° Lintang Selatan serta merupakan dataran rendah dengan ketinggian 2 sampai 12 meter di atas permukaan air laut, kecuali Kecamatan Panceng yang mempunyai ketinggian 25 meter di atas permukaan air laut. <br><br>
                    Kabupaten Gresik memilik 40 destinasi wisata terbagi menjadi 4 kategori wisata yaitu Wisata Alam / Nature Spots, Wisata Religi, Wisata Buatan, Wisata Budaya.


                </p>
            </div>
        </div>
    </div>
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

    <?php
    foreach ($wisata_map as $list_wisata) {
    ?>
        L.marker([<?php echo $list_wisata->latitude_y . ',' . $list_wisata->longitude_x; ?>], {
                icon: <?php if ($list_wisata->wisata_kategori_id == 1) {
                            echo 'alam';
                        } elseif ($list_wisata->wisata_kategori_id == 2) {
                            echo 'religi';
                        } elseif ($list_wisata->wisata_kategori_id == 3) {
                            echo 'buatan';
                        } else {
                            echo 'budaya';
                        }
                        ?>
            }).addTo(map)
            .bindPopup(`<?php echo 'Nama Wisata : ' . $list_wisata['judul'] . '<br> Kategori : ' . $list_wisata->wisataKategori->nama ?>`);
        // .bindPopup('<b>Hello world!</b><br />I am a popup.').openPopup();



    <?php } ?>


    const popup = L.popup()
        .setLatLng([-7.157358, 112.656169])
        .setContent('Kabupaten Gresik')
        .openOn(map);

    // function onMapClick(e) {
    //     popup
    //         .setLatLng(e.latlng)
    //         .setContent(`You clicked the map at ${e.latlng.toString()}`)
    //         .openOn(map);
    // }

    map.on('click', onMapClick);
</script>

<!-- end Portofolio Section -->