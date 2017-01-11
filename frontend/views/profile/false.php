<?php
/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\web\View;
use Yii;
use yii\i18n\PhpMessageSource;
use yii\i18n;
use common\models\User;
use yii\helpers\ArrayHelper;

//$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Profile'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<h1>Ошибка!</h1>
<br>
<p>У вас нет доступа к этой странице.</p>