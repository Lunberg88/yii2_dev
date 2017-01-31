<?php

namespace common\components;

use yii\helpers\Json;


class JsonSerializer implements SerializerInterface
{

 public function writeData($info)
 {
        $path = \Yii::$app->basePath.'/common/data.json';
        $data = $this->encodeData($info);
        file_put_contents($path, $data, FILE_APPEND);
 }
 public function encodeData($info)
 {
     return Json::encode($info);
 }

}