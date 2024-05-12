<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\WisataKategori $model */

$this->title = 'Create Wisata Kategori';
$this->params['breadcrumbs'][] = ['label' => 'Wisata Kategori', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wisata-kategori-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
