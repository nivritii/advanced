<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\CampaignStory */

$this->title = 'Create Campaign Story';
$this->params['breadcrumbs'][] = ['label' => 'Campaign Stories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="campaign-story-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
