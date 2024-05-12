<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\WisataSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="wisata-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'judul') ?>

    <?= $form->field($model, 'wisata_kategori_id') ?>

    <?= $form->field($model, 'deskripsi') ?>

    <?= $form->field($model, 'alamat') ?>

    <?php // echo $form->field($model, 'latitude_y') ?>

    <?php // echo $form->field($model, 'longitude_x') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'update_at') ?>

    <?php // echo $form->field($model, 'created_date') ?>

    <?php // echo $form->field($model, 'update_date') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
