<?php

use app\models\Konten;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\KontenSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Konten';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="konten-index">


    <p>
        <?= Html::a('Tambah Konten', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); 
    ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            'judul',
            [
                'attribute' => 'video',
                'format' => 'raw',
                'value' => function ($data) {
                    return '<video width="320" height="240" controls>
                                <source src="' . Yii::getAlias('../../uploads/video/') . $data['video'] . '" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>';
                },
            ],
            // 'created_date',
            // 'updated_date',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Konten $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                }
            ],
        ],
    ]); ?>


</div>