<?php

namespace common\components;

use yii\helpers\Json;


class JsonSerializer implements SerializerInterface
{
 public function encodeData($info)
 {
     return Json::encode($info);
 }

}