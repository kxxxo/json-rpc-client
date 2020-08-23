<?php

namespace app\controllers;

use app\models\forms\DataForm;
use app\services\DataService;
use JsonRpc2\Exception;
use Yii;
use yii\data\Pagination;
use yii\web\Controller;
use yii\web\Response;

class SiteController extends Controller
{
    private $data_service = null;
    public function __construct($id, $module, $config = [])
    {
        $this->data_service = new DataService();
        parent::__construct($id, $module, $config);
    }

    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
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
        $page_uid = $this->_getPageUid();

        $model = new DataForm(['page_uid'=>$page_uid]);
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            try {
                $this->data_service->create($model);
            } catch (\nizsheanez\jsonRpc\Exception $x) {
                Yii::$app->session->setFlash('error', $x->getMessage() );
            }
            return $this->redirect(Yii::$app->request->referrer);
        }

        try {
            $data_list = $this->data_service->get($page_uid);
        } catch (\nizsheanez\jsonRpc\Exception $x) {
            Yii::$app->session->setFlash('warning', $x->getMessage() );
            $data_list = [];
        }

        return $this->render('index', [
            'model' => $model,
            'data_list'=>$data_list
        ]);

    }


    /**
     * @return string|Response
     */
    public function actionLogin()
    {
        $page_uid = $this->_getPageUid();

        $model = new DataForm(['page_uid'=>$page_uid]);
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            try {
                $this->data_service->create($model);
            } catch (\nizsheanez\jsonRpc\Exception $x) {
                Yii::$app->session->setFlash('error', $x->getMessage() );
            }
            return $this->redirect(Yii::$app->request->referrer);
        }

        try {
            $data_list = $this->data_service->get($page_uid);
        } catch (\nizsheanez\jsonRpc\Exception $x) {
            Yii::$app->session->setFlash('warning', $x->getMessage() );
            $data_list = [];
        }

        return $this->render('login', [
            'model' => $model,
            'data_list'=>$data_list
         ]);
    }



    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        $page_uid = $this->_getPageUid();

        $model = new DataForm(['page_uid'=>$page_uid]);
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            try {
                $this->data_service->create($model);
            } catch (\nizsheanez\jsonRpc\Exception $x) {
                Yii::$app->session->setFlash('error', $x->getMessage() );
            }
            return $this->redirect(Yii::$app->request->referrer);
        }

        try {
            $data_list = $this->data_service->get($page_uid);
        } catch (\nizsheanez\jsonRpc\Exception $x) {
            Yii::$app->session->setFlash('warning', $x->getMessage() );
            $data_list = [];
        }

        return $this->render('about',[
            'model' => $model,
            'data_list'=>$data_list
        ]);
    }

    /**
     * @return string
     */
    private function _getPageUid(){
        return $this->id.'_'.$this->action->id;
    }
}

