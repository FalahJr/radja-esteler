<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Konten $model */

$this->title = 'Tambah Konten';
$this->params['breadcrumbs'][] = ['label' => 'Konten', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="konten-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>