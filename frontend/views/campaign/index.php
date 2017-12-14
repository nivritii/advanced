<?php

use yii\helpers\Html;
use yii\grid\GridView;
use dosamigos\datepicker\DatePicker;
use yii\widgets\Pjax;


/* @var $this yii\web\View */
/* @var $searchModel frontend\models\CampaignSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Campaigns';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="campaign-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Campaign', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <p>
        <?= Html::a('Start a Campaign', ['new'], ['class' => 'btn btn-success']) ?>
    </p>
    <?php    Pjax::begin(); ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'c_title',
            'c_image:ntext',
            'c_description:ntext',
            [
                'attribute' => 'c_start_date',
                'value' => 'c_start_date',
                //'formate' => 'raw',
                'filter' => DatePicker::widget([
                    'model' => $searchModel,
                    'attribute' => 'c_start_date',
                    //'template' => '{addon}{input}',
                    'clientOptions' => [
                    'autoclose' => true,
                    'format' => 'dd-M-yyyy',
                    ]
                ]),
            ],
            [
                'attribute' => 'c_end_date',
                'value' => 'c_end_date',
                //'formate' => 'raw',
                'filter' => DatePicker::widget([
                    'model' => $searchModel,
                    'attribute' => 'c_end_date',
                    //'template' => '{addon}{input}',
                    'clientOptions' => [
                    'autoclose' => true,
                    'format' => 'dd-M-yyyy',
                    ]
                ]),
            ],
            // 'c_goal',
            // 'c_id',
            // 'c_author',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php    Pjax::end(); ?>
</div>
