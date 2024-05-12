<?php

namespace app\controllers;

use app\components\NodeLogger;
use app\models\Wisata;
use app\models\WisataSearch;
use yii\web\Controller;
use Yii;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;


/**
 * WisataController implements the CRUD actions for Wisata model.
 */
class WisataController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Wisata models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new WisataSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Wisata model.
     * @param int $id ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Wisata model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Wisata();
        if ($model->load(Yii::$app->request->post())) {

            $url_gambar = UploadedFile::getInstance($model, 'gambar');
            $model->gambar = $url_gambar->name;

            // NodeLogger::sendLog(['gambar' => $model->gambar]);

            if ($model->validate()) {
                $saveTo = '../uploads/image/' . $url_gambar->baseName . '.' . $url_gambar->extension;

                if ($url_gambar->saveAs($saveTo)) {
                    $model->save();
                    yii::$app->session->setFlash('success', 'Data berhasil diupload');
                    return $this->redirect(['view', 'id' => $model->id]);
                }
            } else {
                echo "gagal";
                $model->loadDefaultValues();
            }
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Wisata model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {
            $url_gambar = UploadedFile::getInstance($model, 'gambar');
            $model->gambar = $url_gambar->name;

            NodeLogger::sendLog(['gambar' => $model->gambar != null]);

            if ($model->gambar != null) {
               $saveTo = '../uploads/image/' . $url_gambar->baseName . '.' . $url_gambar->extension;
               $url_gambar->saveAs($saveTo);
                    $model->save();
                    return $this->redirect(['view', 'id' => $model->id]);
            }
            $model->save();
            return $this->redirect(['view', 'id' => $model->id]); 
        }else{
        return $this->render('update', [
            'model' => $model,
        ]);
        }
    }

    /**
     * Deletes an existing Wisata model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Wisata model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Wisata the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Wisata::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
