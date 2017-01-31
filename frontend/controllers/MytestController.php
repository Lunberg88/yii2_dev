<?php

namespace frontend\controllers;

use Yii;

class MytestController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $data = Yii::$app->request->userHost;
        Yii::$container->get('Crawler')->serializer->writeData($data);
        return $this->render('index');
    }

}
