<?php

namespace frontend\controllers;

use Yii;

class MytestController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $data = Yii::$app->request->userHost;
        $crawler = Yii::$container->get('Crawler')->writeData($data);
        return $this->render('index');
    }

}
