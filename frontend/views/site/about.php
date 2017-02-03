<?php

/* @var $this yii\web\View */

use yii\bootstrap\NavBar;
use yii\bootstrap\Nav;
use yii\bootstrap\Tabs;
use yii\bootstrap\Alert;
use yii\bootstrap\Button;
use yii\bootstrap\ButtonDropdown;
use yii\bootstrap\ButtonGroup;
use yii\bootstrap\Carousel;
use yii\bootstrap\Collapse;
use yii\bootstrap\Modal;
use yii\bootstrap\Progress;
use yii\bootstrap\ActiveForm;

use yii\widgets;
use common\widgets\TestWidget;
use yii\helpers\Html;
use yii\grid\GridView;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
 <br>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>
<br>
<?= Carousel::widget ( [
    'items' => [
    [
        'content' => '<img style="width:474px;height:296px" src="//nix-tips.ru/wp-content/uploads/2014/11/carousel003.jpg"/>',
        'caption' => '<h2>Yii Gii</h2><p>Удобный встроенный генератор кода. Модули, модели на основе таблиц в БД и, конечно же, CRUD</p>',
        'options' => []
    ],
     [
        'content' => '<img style="width:474px" src="//nix-tips.ru/wp-content/uploads/2014/11/carousel002.jpg"/>',
        'caption' => '<h2>Отличный отладчик</h2><p>Легко подключается, помнит все запросы http, БД и логи</p>',
        'options' => []
    ],
     [
        'content' => '<img style="width:474px" src="//nix-tips.ru/wp-content/uploads/2014/11/carousel001.jpg"/>',
        'caption' => '<h2>Быстрый старт</h2><p>Установка и обновление через composer</p>',
        'options' => []
    ]
    ],
       'options' => [
       'style' => 'width:474px;' // Задаем ширину контейнера
    ]
]);
?>
<br>
      <?= Tabs::widget([
    'items' => [
        [
            'label' => 'Yii2',
            'content' => '<h2>Фреймворк Yii 2 - один из самых быстрых, безопасных и "крутых" php-фреймворков.</h2>',
            'active' => true
        ],
        [
            'label' => 'jQuery',
            'content' => '<h2>jQuery - один из самых популярных JavaScript фреймворков, который работает с объектами DOM.</h2>'
        ],
        [
            'label' => 'Bootstrap',
            'content' => '<h2>Twitter Bootstrap - супер фреймворк, объединяющий в себе html, css, и JavaScript для для верстки веб-интерфейсов и страниц.</h2>',
            'headerOptions' => [
                'id' => 'headerOptions'
            ],
            'options' => [
                'id' => 'options'
            ]
        ],
        [
            'label' => 'Еще табы',
            'content' => '<h2>Вы можете добавить любое количество табов. Просто опишите их структуру в массиве.</h2>'
        ],
        [
            'label' => 'Выпадающий список табов',
            'items' => [
                [
                    'label' => 'Первый таб из выпадающего списка',
                    'content' => '<h2>Обновите свои познания в Yii 2 and Twitter Bootstrap. Все возможнсти уже обернуты в удобные интерфейсы.</h2>'
                ],
                [
                    'label' => 'Второй таб из выпадающего списка',
                    'content' => '<h2>Один в поле не воин, а двое - уже компания.</h2>'
                ],
                [
                    'label' => 'Это третий таб из выпадающего списка',
                    'content' => '<h2>Третий не лишний!</h2>'
                ]
            ]
        ]
    ]
]);
?>

</div>
