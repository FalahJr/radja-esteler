<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Berita $model */

$this->title = $model->judul;
$this->params['breadcrumbs'][] = ['label' => 'Beritas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="berita-view">

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->

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
                'attribute' => 'gambar',
                'format' => 'html',
                'value' => function ($data) {
                    return Html::img('../../uploads/image/' . $data['gambar'], [
                        'width' => '150px'
                    ]);
                },

            ],
            'id',
            'judul',
            'deskripsi:ntext',
            // 'gambar',
            'created_date',
            'updated_date',
        ],
    ]) ?>

</div>