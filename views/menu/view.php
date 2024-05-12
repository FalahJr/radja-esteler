<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Menu $model */

$this->title = $model->nama;
$this->params['breadcrumbs'][] = ['label' => 'Menu', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="menu-view">


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
            'nama',
            'deskripsi:ntext',
            // 'gambar',
            'harga',
            'created_date',
            'update_date',
        ],
    ]) ?>

</div>