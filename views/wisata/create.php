<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Wisata $model */

$this->title = 'Tambah Wisata';
$this->params['breadcrumbs'][] = ['label' => 'Wisata', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ml-2 wisata-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
