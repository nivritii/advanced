<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\CampaignRewards */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="campaign-rewards-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'c_id')->textInput() ?>

    <?= $form->field($model, 'r_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'r_pledge_amt')->textInput() ?>

    <?= $form->field($model, 'r_description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'r_delivery_date')->textInput() ?>

    <?= $form->field($model, 'r_limit_availability')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
