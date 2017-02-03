<?php
Yii::setAlias('@common', dirname(__DIR__));
Yii::setAlias('@frontend', dirname(dirname(__DIR__)) . '/frontend');
Yii::setAlias('@backend', dirname(dirname(__DIR__)) . '/backend');
Yii::setAlias('@console', dirname(dirname(__DIR__)) . '/console');

Yii::$container->set(\common\components\SerializerInterface::class, \common\components\JsonSerializer::class);
Yii::$container->set('Crawler',
   [
    'class' => \common\components\Crawler::class,
    'path' => '/files/',
    ]);
