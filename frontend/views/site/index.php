<?php
/* @var $this yii\web\View */

use yii\web\View;
use Yii;
use yii\i18n\PhpMessageSource;
use yii\i18n;
use yii\helpers\Html;
use yii\helpers\ArrayHelper;


/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">
<?= Yii::t('app', 'You are welcome') ?>

    <div class="jumbotron">
        <h1><?= Yii::t('app', 'Congratulations') ?>!</h1>

        <p class="lead"><?= Yii::t('app', 'You have successfully created your Yii-powered application') ?>.</p>

        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com"><?= Yii::t('app', 'Get started with Yii') ?></a></p>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2><?= Yii::t('app', 'Heading') ?></h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/doc/"><?= Yii::t('app', 'Yii Documentation') ?> &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2><?= Yii::t('app', 'Heading') ?></h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/forum/"><?= Yii::t('app', 'Yii Forum') ?> &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2><?= Yii::t('app', 'Heading') ?></h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/extensions/"><?= Yii::t('app', 'Yii Extensions') ?> &raquo;</a></p>
            </div>
        </div>

    </div>
</div>
