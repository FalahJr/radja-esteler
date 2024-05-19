<?php

use app\models\Berita;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\BeritaSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Berita';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="berita-index">


    <p>
        <?= Html::a('Tambah Berita', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); 
    ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                'attribute' => 'gambar',
                'format' => 'html',
                'value' => function ($data) {
                    return Html::img(
                        '../../uploads/image/' . $data['gambar'],
                        [
                            'width' => '150px'
                        ]
                    );
                },

            ],
            // 'id',
            'judul',
            'deskripsi:ntext',
            // 'gambar',
            // 'created_date',
            //'updated_date',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Berita $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                }
            ],
        ],
    ]); ?>


</div>