<?php

namespace frontend\controllers;

use Yii;
use common\models\LoginForm;
use common\models\User;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

class ProfileController extends Controller
{

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'denyCallback' => function ($rule, $action) {
                    $this->redirect('false');
                },
                'only' => ['userinfo', 'false'],
                'rules' => [

                    [
                        'allow' => true,
                        'actions' => ['false'],
                        'roles' => ['?'],
                    ],

                    [
                        'allow' => true,
                        'actions' => ['userinfo'],
                        'roles' => ['@'],
                    ],

                ],
            ],
        ];
    }

    public function actionUserinfo()
    {
    /*
        if(Yii::$app->user->isGuest) {
           return $this->render('false');
        } else { */
        $model = User::findOne(['id' => Yii::$app->user->id]) ?? new User();
        return $this->render('index', [
            'model' => $model,
        ]);
       /* } */
    }

    public function actionIndex()
    {
     return $this->redirect('profile/userinfo');
    }

    public function actionFalse()
    {
     return $this->render('false');
    }

}
