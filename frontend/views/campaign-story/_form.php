<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\CampaignStory */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="campaign-story-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'c_id')->textInput() ?>

    <?= $form->field($model, 's_video')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 's_description')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
