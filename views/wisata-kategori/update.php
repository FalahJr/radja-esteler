<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\WisataKategori $model */

$this->title = 'Update Wisata Kategori : ' . $model->nama;
$this->params['breadcrumbs'][] = ['label' => 'Wisata Kategori', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="wisata-kategori-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
