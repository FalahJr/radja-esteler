<?php

use yii\helpers\Html;
?>
<div class="card container" style="margin-top:150px; margin-bottom:100px;width:50%">
    <div class="card-body login-card-body">
        <h4 class="login-box-msg text-center">Login Halaman Admin</h4>
        <br>

        <?php $form = \yii\bootstrap4\ActiveForm::begin(['id' => 'login-form']) ?>

        <?= $form->field($model, 'username', [
            'options' => ['class' => 'form-group has-feedback'],
            'inputTemplate' => '{input}<div class="input-group-append"><div class="input-group-text"><span class="fas fa-envelope"></span></div></div>',
            'template' => '{beginWrapper}{input}{error}{endWrapper}',
            'wrapperOptions' => ['class' => 'input-group mb-3']
        ])
            ->label(false)
            ->textInput(['placeholder' => $model->getAttributeLabel('username')]) ?>

        <?= $form->field($model, 'password', [
            'options' => ['class' => 'form-group has-feedback'],
            'inputTemplate' => '{input}<div class="input-group-append"><div class="input-group-text"><span class="fas fa-lock"></span></div></div>',
            'template' => '{beginWrapper}{input}{error}{endWrapper}',
            'wrapperOptions' => ['class' => 'input-group mb-3']
        ])
            ->label(false)
            ->passwordInput(['placeholder' => $model->getAttributeLabel('password')]) ?>

        <div class="row">
            <!-- <div class="col-8"> -->
            <?php
            // echo $form->field($model, 'rememberMe')->checkbox([
            //     'template' => '<div class="icheck-primary">{input}{label}</div>',
            //     'labelOptions' => [
            //         'class' => ''
            //     ],
            //     'uncheck' => null
            // ]) 
            ?>
            <!-- </div> -->
            <div class="col-12">
                <?= Html::submitButton('Login', ['class' => 'btn btn-primary btn-block']) ?>
            </div>
        </div>

        <?php \yii\bootstrap4\ActiveForm::end(); ?>


    </div>
    <!-- /.login-card-body -->
</div>