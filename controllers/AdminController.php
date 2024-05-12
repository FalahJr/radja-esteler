<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use \app\controllers\BaseController as BaseController;



class AdminController extends BaseController
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {

        return [
            'access' => [
                'class' => AccessControl::class,
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    // public function beforeAction($action)
    // {

    //     if (Yii::$app->user->isGuest) {
    //         return $this->redirect(["public/login"]);
    //     }

    //     return parent::beforeAction($action);
    // }
    /**
     * {@inheritdoc}
     */


    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }



    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        if (Yii::$app->user->isGuest) {
            return $this->redirect(["public/login"]);
        }
        $session = Yii::$app->user->isGuest;
        // $this->layout = 'main-public.php';
        return $this->render('index', [
            'session' => $session,
        ]);
    }

    // public function actionBlog()
    // {
    //     return $this->render('blog');
    // }

    // public function actionDetailBlog()
    // {
    //     return $this->render('detail-blog');
    // }

    // public function actionWisata()
    // {
    //     return $this->render('wisata');
    // }

    // public function actionDetailWisata()
    // {
    //     return $this->render('detail-wisata');
    // }
    // public function actionPemerintahan()
    // {
    //     return $this->render('pemerintahan');
    // }
    // public function actionPerkembanganDesa()
    // {
    //     return $this->render('perkembangan-desa');
    // }
    // public function actionPotensi()
    // {
    //     return $this->render('potensi');
    // }
    // public function actionSejarah()
    // {
    //     return $this->render('sejarah');
    // }


    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    // public function actionContact()
    // {
    //     $model = new ContactForm();
    //     if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
    //         Yii::$app->session->setFlash('contactFormSubmitted');

    //         return $this->refresh();
    //     }
    //     return $this->render('contact', [
    //         'model' => $model,
    //     ]);
    // }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }
}
