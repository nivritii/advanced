<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Campaign */

$this->title = $model->c_title;
$this->params['breadcrumbs'][] = ['label' => 'Campaigns', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="campaign-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->c_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->c_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'c_title',
            [
                'attribute'=>'c_image',
                'value' => Yii::getAlias('@ImgUploadPath') .'\web\uploads'.$model->c_title.$model->file->extension,
            ],
            //'c_image:ntext',
            'c_description:ntext',
            'c_start_date',
            'c_end_date',
            'c_goal',
            'c_id',
            'c_author',
        ],
    ]) ?>

</div>
