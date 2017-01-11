<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use Yii;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'New';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-signup">
    <h1><?= Html::encode(Yii::t('app', $this->title)) ?></h1>

    <div class="row">
        <div class="col-lg-6">
        <p style="color:red;font-weight:bold;">Эту страницу могут видеть только авторизированые пользователи!</p>
        <p>This is e New test action!</p>
        </div>
    </div>
</div>
