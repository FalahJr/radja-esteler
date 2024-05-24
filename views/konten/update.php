<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Konten $model */

$this->title = 'Update Konten: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Konten', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="konten-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>