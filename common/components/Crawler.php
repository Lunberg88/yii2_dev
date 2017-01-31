<?php

namespace common\components;

use yii\base\Object;
use common\components\JsonSerialzer;
use common\components\XmlSerializer;

class Crawler extends Object
{
 /**
 * @var SerializerInterface
 */
 public $serializer;
 /**
 * @var $path
 */
 public $path;
 /**
 * Crawler constructor.
 * @param SerializerInterface $serializer
 * @param array $config
 */
 public function __construct(SerializerInterface $serializer, $config = [])
 {
     $this->serializer = $serializer;
     parent::__construct($config);
 }
}