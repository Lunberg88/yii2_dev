<?php

namespace frontend\controllers;

use Yii;

class MytestController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

}
