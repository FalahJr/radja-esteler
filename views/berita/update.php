<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Berita $model */

$this->title = 'Update Berita: ' . $model->judul;
$this->params['breadcrumbs'][] = ['label' => 'Beritas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="berita-update">



    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>