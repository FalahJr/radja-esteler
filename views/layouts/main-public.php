<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

AppAsset::register($this);

$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => '@web/favicon.ico']);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">

<head>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />
    <!-- Make sure you put this AFTER Leaflet's CSS -->
    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>
    <!-- <style>
        #map { height: 180px; }

     </style> -->
</head>

<body class="d-flex flex-column h-100">
    <?php $this->beginBody() ?>
    <input type="checkbox" id="check"></input>
    <nav class="navbar navbar-expand-lg navbar-light">
        <!-- <a class="navbar-brand" href="index">
            <h4>WONOSALAM<br>BERDIKARI</h4>
        </a> -->
        <div class="d-flex">
            <?= Html::a(Html::img('@web/img/home3.jpeg', ['width' => '15%']), ['index'], ['class' => 'navbar-brand ml-4']) ?>

            <button class="navbar-toggler bg-white p-2" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon "></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class=" navbar-nav ml-auto">
                <li class="nav-item">
                    <?= Html::a('Beranda', ['index'], ['class' => 'nav-link nunitoSemiBold']) ?>
                </li>

                <li class="nav-item">
                    <?= Html::a('Daftar Menu', ['menu'], ['class' => 'nav-link nunitoSemiBold']) ?>
                </li>
                <li class="nav-item">
                    <?= Html::a('Berita', ['berita'], ['class' => 'nav-link nunitoSemiBold']) ?>
                </li>
            </ul>
        </div>
    </nav>

    <main id="main" class="" role="">
        <div class="">
            <?php if (!empty($this->params['breadcrumbs'])) : ?>
                <?= Breadcrumbs::widget(['links' => $this->params['breadcrumbs']]) ?>
            <?php endif ?>
            <?= Alert::widget() ?>
            <?= $content ?>
        </div>
    </main>

    <footer class="page-footer font-small unique-color-dark bottom">
        <!-- Contact -->
        <div id="footerQ" style="padding: 10px; color: white;">
            <div class="container text-md-left mt-5">
                <div class="row mt-3">
                    <div class="col-md-6 col-lg-3 col-xl-3 mx-auto mb-4">
                        <h3 class="text-uppercase font-weight-bold">Radja Es Teler Sultan</h3>
                        <hr class="accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: white;">

                    </div>
                    <div class="col-md-6 col-lg-3 col-xl-3 mx-auto mb-4">
                        <p class="text-white">Radja Es Teler Sultan, Open Outlet 08.00-17.00 (Rabu Close) Deltasari Indah Blok AA-8, Sidoarjo
                        </p>
                    </div>
                    <!-- <div class="col-md-6 col-lg-3 col-xl-3 mx-auto mb-4">
                        <h6 class="text-uppercase font-weight-bold">Dosen Pembimbing :</h6>
                        <hr class="accent-2 mb-3 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: white;">

                        <p class="text-white">

                            Dr. Eko Budiyanto, S.Pd., M.Si.
                        </p>
                    </div> -->

                    <div class="col-md-6 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <h6 class="text-uppercase font-weight-bold">Contact Us</h6>
                        <hr class="accent-2 mb-3 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: white;">
                        <div class="row">
                            <div class="col-12 col-md-12">
                                <p class="footer-text">⁠⁠Instagram: @radja_estelersultan_deltasari</p>
                                <!-- <p class="footer-text">Instagram : @marioadise</p> -->
                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </div>
        </div>
        <!-- End Contact -->

        <!-- Copyright -->
        <div class="footer-copyright text-center">
            <p class="nunitoRegular">Radja Es Teler Sultan 2024 </p>
        </div>
        <!-- End Copyright -->

    </footer>
    <!-- End Footer -->

    <!-- Back to top -->
    <!-- <button id="btnTop" class="btnTop" title="Go to top"><i class="up"></i>TOP</button> -->
    <!-- End of Back to top -->

    <!-- Including JavaScript File Start -->
    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/popper.min.js"></script>
    <script type="text/javascript" src="assets/lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="assets/lib/select2/js/select2.min.js"></script>
    <script src="assets/js/script.js"></script>
    <script>
        // select 2
        $(document).ready(function() {
            let aman = localStorage.getItem('authLogin');
            if (aman) {
                $('.nonAuth').addClass('d-none');
                $('.auth').removeClass('d-none');
            } else {
                $('.nonAuth').removeClass('d-none');
                $('.auth').addClass('d-none');
            }

            $('.logout').click(function() {
                localStorage.removeItem('authLogin');
                window.location.href = 'Login.html';
            })

            $('.js-example-basic-multiple').select2();
            $('.js-example-basic-single').select2();
            $('#categoryCard .card').each(function(i) {
                setTimeout(function() {
                    $('#categoryCard .card').eq(i).addClass('bottomToTop');
                }, 300 * i);
            });
        });

        // end select 2

        // filter
        $('.filterAction').click(function() {
            $('.filterContent').toggleClass('filterAnimation');
        })
        // end filter
    </script>

    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>