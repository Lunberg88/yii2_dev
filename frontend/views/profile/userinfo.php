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
<h1><?= Html::encode(Yii::t('app', 'Profile')) ?></h1>
      <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'username',
            'first_name',
            'last_name',
        ],
    ]) ?>
<br>
