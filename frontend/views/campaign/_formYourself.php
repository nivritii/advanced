<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\CampaignYourself */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="campaign-yourself-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'y_fund_recipient')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'y_bank_acc_details')->textInput() ?>

    <?= $form->field($model, 'y_payment_source')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
