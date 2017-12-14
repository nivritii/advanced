<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\CampaignYourselfSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Campaign Yourselves';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="campaign-yourself-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Campaign Yourself', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'y_id',
            'c_id',
            'y_email:email',
            'y_fund_recipient',
            'y_bank_acc_details',
            // 'y_payment_source',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
