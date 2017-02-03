<?php

use Yii;
use yii\helpers\Html;
/* @var $model common\models\Post */
$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Новости', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<h1><?= $model->title ?></h1>
<div class="content">
<p><?= $model->short ?></p>
<p><?= $model->full ?></p>
</div>
<div class="meta">
    <p>Автор: <?= $model->author ?></p>
    <p>Дата: <?= $model->created_at ?></p>
</div>
