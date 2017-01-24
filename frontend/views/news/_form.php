<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\News */
/* @var $form yii\widgets\ActiveForm */
?>

    <div class="row">
        <div class="col-lg-5">

    <?php $form = ActiveForm::begin(); ?>

<table border="0" width="990px" cellpadding="8" cellspacing="8"><tr><td>

    <?= $form->field($model, 'title')->textInput() ?>

    <?= $form->field($model, 'short')->textarea(['rows' => 12]) ?>

    <?= $form->field($model, 'full')->textarea(['rows' => 16]) ?>

</td><td valign="top">

    <?= $form->field($model, 'publish_status')->textInput() ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'author_id')->textInput() ?>

    <?= $form->field($model, 'author')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

</td></tr></table>

    <?php ActiveForm::end(); ?>
      </div>
</div>
