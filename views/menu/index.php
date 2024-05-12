<?php

use app\models\Menu;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\MenuSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Daftar Menu';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="menu-index">


    <p>
        <?= Html::a('Tambah Menu', ['create'], ['class' => 'btn btn-success']) ?>
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
            'nama',
            'deskripsi:ntext',
            // 'gambar',
            'harga',
            //'created_date',
            //'update_date',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Menu $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                }
            ],
        ],
    ]); ?>


</div>