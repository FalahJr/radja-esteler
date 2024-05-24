<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Konten $model */

$this->title = $model->judul;
$this->params['breadcrumbs'][] = ['label' => 'Kontens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $model->id;
\yii\web\YiiAsset::register($this);
?>
<div class="konten-view">


    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            [
                'attribute' => 'video',
                'format' => 'raw',
                'value' => '<video width="320" height="240" controls>
                                <source src="' . Yii::getAlias('../../uploads/video/') . $model->video . '" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>',
            ],
            'id',
            'judul',
            // 'video',
            'created_date',
            'updated_date',
        ],
    ]) ?>

</div>