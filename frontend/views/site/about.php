<?php

/* @var $this yii\web\View */

use common\widgets\TestWidget;
use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
  <div class=mywidget">
        <?= TestWidget::widget([
            'message' => 'This is a additional static text-message only for two pages (about & contact) on this project!'
            ]); ?>
  </div>
 <br>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>
<br>

    <p>This is the About page. You may modify the following file to customize its content:</p>

    <code><?= __FILE__ ?></code>
</div>
