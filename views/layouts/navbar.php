<?php

use yii\helpers\Html;

?>
<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">




    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">



        <li class="nav-item">
            <?= Html::a('<i class="fas fa-sign-out-alt"></i>', ['admin/logout'], ['data-method' => 'post', 'class' => 'nav-link']) ?>
        </li>
        <!-- <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                <i class="fas fa-th-large"></i>
            </a>
        </li> -->
    </ul>
</nav>
<!-- /.navbar -->