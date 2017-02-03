<?php

use yii\helpers\Html;

/* @var $model common\models\News */
//$this->title = $model->title;
?>

<h3><?= $model->city ?> / <?= $model->id ?></h3>
<div class="content">
<p><?= $model->street ?></p>
<p><?= $model->house ?></p>
</div>
<div class="meta">
</div>
<?= Html::a(Yii::t('app', 'Read more'), ['list', 'id' => $model->id], ['class' => 'btn btn-success']) ?>


