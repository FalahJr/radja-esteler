<?php

use app\models\WisataKategori;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\WisataKategoriSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Wisata Kategori';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wisata-kategori-index">


    <p>
        <?= Html::a('Create Wisata Kategori', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'nama',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, WisataKategori $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
