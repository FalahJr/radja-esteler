<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Wisata $model */

$this->title = $model->judul;
$this->params['breadcrumbs'][] = ['label' => 'Wisata', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="wisata-view">

   

    <p>
        <?= Html::a('Edit', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
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
                    return Html::img('../../uploads/image/' . $data['gambar']);
                },

            ],
            'id',
            'judul',
            [
                'attribute' => 'wisata_kategori_id',
                'value' => function ($model) {
                    return $model->wisataKategori->nama;
                },
            ],
            'deskripsi:ntext',
            'alamat',
            'latitude_y',
            'longitude_x',
            'longitude_x',
            'url_maps:url',
            'created_at',
            'update_at',
            'created_date',
            'update_date',
        ],
    ]) ?>

</div>
