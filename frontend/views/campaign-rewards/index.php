<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\CampaignRewardsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Campaign Rewards';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="campaign-rewards-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Campaign Rewards', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'r_id',
            'c_id',
            'r_title',
            'r_pledge_amt',
            'r_description',
            // 'r_delivery_date',
            // 'r_limit_availability',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
