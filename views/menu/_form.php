<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Menu $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="menu-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'deskripsi')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'gambar')->fileInput(['accept' => 'image/*']) ?>


    <?= $form->field($model, 'harga')->textInput(['type' => 'number', 'min' => 0]) ?>

    <?= $form->field($model, 'created_date')->hiddenInput(['maxlength' => true, 'value' => Yii::$app->formatter->asDatetime('now', 'php:Y-m-d H:i:s')])->label(false) ?>

    <?= $form->field($model, 'update_date')->hiddenInput(['maxlength' => true, 'value' => Yii::$app->formatter->asDatetime('now', 'php:Y-m-d H:i:s')])->label(false) ?>

    <div class="form-group">
        <?= Html::submitButton('Simpan', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>