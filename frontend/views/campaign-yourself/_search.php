<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\CampaignYourselfSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="campaign-yourself-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'y_id') ?>

    <?= $form->field($model, 'c_id') ?>

    <?= $form->field($model, 'y_email') ?>

    <?= $form->field($model, 'y_fund_recipient') ?>

    <?= $form->field($model, 'y_bank_acc_details') ?>

    <?php // echo $form->field($model, 'y_payment_source') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
