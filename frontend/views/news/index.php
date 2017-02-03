<?php
/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\web\View;
use Yii;
use yii\i18n\PhpMessageSource;
use yii\i18n;
use app\models\News;
use yii\helpers\ArrayHelper;

$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'News'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<h1><b><?= Html::encode(Yii::t('app', 'News')) ?></b></h1>
<div class="col-sm-8 post-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php
    foreach ($newss->models as $news) {
        echo $this->render('viewnews', [
            'model' => $news
        ]);
    }
    ?>
</div>

<br>


