<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Menu $model */

$this->title = 'Update Menu: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Menu', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="menu-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>