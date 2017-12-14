<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\CampaignStory */

$this->title = 'Update Campaign Story: ' . $model->s_id;
$this->params['breadcrumbs'][] = ['label' => 'Campaign Stories', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->s_id, 'url' => ['view', 'id' => $model->s_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="campaign-story-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
