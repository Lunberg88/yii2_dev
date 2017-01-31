<?php
namespace common\components;

use yii\base\Object;
use yii\helpers\Json;
use SimpleXMLElement;

Class RequestCrawler extends Object
 {
    /**
     * @var $type
     */
     public $type;
    /**
     * @var $path
     */
     public $path;
    /**
     * @param $info
     */
    public function writeData($info)
    {
        $path = \Yii::$app->basePath.'/'.$this->path.'data.'.$this->type;
        $data = $this->preData($info);
        file_put_contents($path, $data, FILE_APPEND);
    }
    /**
     * @param $info
     * @return mixed|string
     */
     public function preData($info)
     {
         if($this->type === "json") {
             return Json::encode($info);
         } elseif ($this->type === "xml") {
                $data = new SimpleXMLElement('<root/>');
                     array_walk_recursive($data, array ($data, 'addChild'));
                     return $data->asXML();
         }
     }
 }

