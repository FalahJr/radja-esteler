<?php

use app\models\WisataKategori;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/** @var yii\web\View $this */
/** @var app\models\Wisata $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="wisata-form">

    <?php
    date_default_timezone_set('Asia/Jakarta');
    $form = ActiveForm::begin();
    $kategori = ArrayHelper::map(WisataKategori::find()->all(), "id", "nama");
    ?>

    <?= $form->field($model, 'judul')->textInput() ?>
    <?= $form->field($model, 'wisata_kategori_id')->dropDownList($kategori, ['prompt' => 'Pilih Kategori']) ?>
    <?= $form->field($model, 'deskripsi')->textarea(['rows' => 6]) ?>
    <?= $form->field($model, 'gambar')->fileInput(['accept' => 'image/*']) ?>

    <?= $form->field($model, 'alamat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'latitude_y')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'longitude_x')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'url_maps')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_at')->hiddenInput(['maxlength' => true ,'value' => Yii::$app->user->identity->username])->label(false) ?>

    <?= $form->field($model, 'update_at')->hiddenInput(['maxlength' => true ,'value' => Yii::$app->user->identity->username])->label(false) ?>

    <?= $form->field($model, 'created_date')->hiddenInput(['maxlength' => true ,'value' => Yii::$app->formatter->asDatetime('now', 'php:Y-m-d H:i:s')])->label(false) ?>

    <?= $form->field($model, 'update_date')->hiddenInput(['maxlength' => true ,'value' => Yii::$app->formatter->asDatetime('now', 'php:Y-m-d H:i:s')])->label(false) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
