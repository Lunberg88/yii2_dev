<?php
/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\web\View;
use yii\i18n\PhpMessageSource;
use yii\i18n;
use app\models\Address;
use yii\helpers\ArrayHelper;

$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Address'), 'url' => ['main']];
//$this->params['breadcrumbs'][] = $this->title;
?>
<h1><b><?= Html::encode(Yii::t('app', 'Address')) ?></b></h1>
<div class="col-sm-8 post-index">

    <?php
    foreach ($addresss->models as $address) {
        echo $this->render('list', [
            'model' => $address
        ]);
    }
    ?>
</div>

<br>


