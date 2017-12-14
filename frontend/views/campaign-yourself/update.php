<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\CampaignYourself */

$this->title = 'Update Campaign Yourself: ' . $model->y_id;
$this->params['breadcrumbs'][] = ['label' => 'Campaign Yourselves', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->y_id, 'url' => ['view', 'id' => $model->y_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="campaign-yourself-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
