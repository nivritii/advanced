<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\CampaignRewards */

$this->title = 'Update Campaign Rewards: ' . $model->r_id;
$this->params['breadcrumbs'][] = ['label' => 'Campaign Rewards', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->r_id, 'url' => ['view', 'id' => $model->r_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="campaign-rewards-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
