<?php

use Yii;
use yii\helpers\Html;

/* @var $model common\models\News */
$this->title = $model->title;
?>

<h1><?= $model->title ?></h1>
<div class="content">
<p><?= $model->short ?></p>
<p><?= $model->full ?></p>
</div>
<div class="meta">
    <p>Автор: <?= $model->author ?> Дата публикации: <?= $model->created_at ?></p>
</div>
<?= Html::a(Yii::t('app', 'Read more'), ['view', 'id' => $model->id], ['class' => 'btn btn-success']) ?>


