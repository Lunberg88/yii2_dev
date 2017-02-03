<?php
namespace common\widgets;

use Yii;
use yii\base\Widget;
use yii\helpers\Html;

class TestWidget extends Widget
{
    public $message;

    public function init()
    {
        parent::init();
        if ($this->message === null) {
            $this->message = 'This is a test Widget';
        }
    }

    public function run()
    {
        return Html::encode($this->message);
    }
}
