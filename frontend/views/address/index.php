<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AddressSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Addresses');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="address-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Address'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'user_id',
            'email:email',
            'city',
            'street',
            'house',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <br>

         <?= GridView::widget([
      'dataProvider' => $dataProvider,
       'columns' => [
           'city',
           'street',
           'house',
       ],
    //   ['class' => 'yii\grid\GridView'],
 ]); ?>

</div>
