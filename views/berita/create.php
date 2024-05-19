<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Berita $model */

$this->title = 'Tambah Berita';
$this->params['breadcrumbs'][] = ['label' => 'Beritas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="berita-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>