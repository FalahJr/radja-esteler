<?php

namespace app\controllers;

use app\models\Konten;
use app\models\KontenSearch;
use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * KontenController implements the CRUD actions for Konten model.
 */
class KontenController extends Controller
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
     * Lists all Konten models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new KontenSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Konten model.
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
     * Creates a new Konten model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        // $model = new Konten();

        // if ($this->request->isPost) {
        //     if ($model->load($this->request->post()) && $model->save()) {
        //         return $this->redirect(['view', 'id' => $model->id]);
        //     }
        // } else {
        //     $model->loadDefaultValues();
        // }

        // return $this->render('create', [
        //     'model' => $model,
        // ]);

        $model = new Konten();

        if ($model->load(Yii::$app->request->post())) {
            $url_video = UploadedFile::getInstance($model, 'video');
            if ($url_video) {
                $model->video = $url_video->name;

                // Validasi model sebelum menyimpan
                if ($model->validate()) {
                    $saveTo = Yii::getAlias('../uploads/video/') . $url_video->baseName . '.' . $url_video->extension;

                    // Cek apakah direktori tujuan ada, jika tidak, buat direktori
                    if (!is_dir(Yii::getAlias('../uploads/video/'))) {
                        mkdir(Yii::getAlias('../uploads/video/'), 0755, true);
                    }

                    // Simpan file video
                    if ($url_video->saveAs($saveTo)) {
                        if ($model->save(false)) {
                            Yii::$app->session->setFlash('success', 'Data berhasil diupload');
                            return $this->redirect(['view', 'id' => $model->id]);
                        } else {
                            Yii::$app->session->setFlash('error', 'Data tidak bisa disimpan ke database');
                        }
                    } else {
                        Yii::$app->session->setFlash('error', 'Gagal menyimpan file video');
                    }
                } else {
                    Yii::$app->session->setFlash('error', 'Validasi model gagal');
                }
            } else {
                Yii::$app->session->setFlash('error', 'Tidak ada file video yang diunggah');
            }
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Konten model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Konten model.
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
     * Finds the Konten model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Konten the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Konten::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
