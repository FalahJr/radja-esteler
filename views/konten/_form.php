<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Konten $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="konten-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'judul')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'video')->fileInput(['accept' => 'video/*']) ?>


    <?= $form->field($model, 'created_date')->hiddenInput(['maxlength' => true, 'value' => Yii::$app->formatter->asDatetime('now', 'php:Y-m-d H:i:s')])->label(false) ?>

    <?= $form->field($model, 'updated_date')->hiddenInput(['maxlength' => true, 'value' => Yii::$app->formatter->asDatetime('now', 'php:Y-m-d H:i:s')])->label(false) ?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>