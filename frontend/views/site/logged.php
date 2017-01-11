<?php

/* @var $this yii\web\View */

use yii\widgets;
use common\widgets\TestWidget;
use yii\helpers\Html;
use yii\grid\GridView;

$this->title = 'Logged';
$this->params['breadcrumbs'][] = $this->title;
?>
 <br>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>
<br>
    <p>Page for Auth. users.</p>
</div>
