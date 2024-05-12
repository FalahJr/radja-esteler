<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Menu $model */

$this->title = 'Tambah Menu';
$this->params['breadcrumbs'][] = ['label' => 'Menu', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="menu-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>