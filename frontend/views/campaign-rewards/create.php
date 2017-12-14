<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\CampaignRewards */

$this->title = 'Create Campaign Rewards';
$this->params['breadcrumbs'][] = ['label' => 'Campaign Rewards', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="campaign-rewards-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
