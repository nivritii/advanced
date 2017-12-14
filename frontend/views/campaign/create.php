<?php

use yii\helpers\Html;
use frontend\models\Campaign;
use frontend\models\CampaignRewards;
use \frontend\models\CampaignStory;
use frontend\models\CampaignYourself;

/* @var $this yii\web\View */
/* @var $model frontend\models\Campaign */

$this->title = 'Create Campaign';
$this->params['breadcrumbs'][] = ['label' => 'Campaigns', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

          $model = new Campaign(); 
          $modelReward = new CampaignRewards(); 
          $modelStory = new CampaignStory();
          $modelYourself = new CampaignYourself();
?>
<div class="campaign-create">

   <!-- <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

   -->
   
<!-- Page Header -->
    <header class="masthead" style="background-image:url('../img/start_campaign.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
              <h1>Start a Campaign</h1>
              <span class="subheading">Add picture and details of the campaign.</span>
            </div>
          </div>
        </div>
      </div>
    </header>
   
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="post-preview">
              <?php
    $wizard_config = [
	'id' => 'stepwizard',
	'steps' => [
		1 => [
			'title' => 'Start your campaign',
			'icon' => 'glyphicon glyphicon-user',
			'content' => $this->render('_form',[
                            'model' => $model,
                            ]),
			'buttons' => [
				'next' => [
					'title' => 'Forward', 
					'options' => [
						'class' => 'disabled'
					],
				 ],
			 ],
		],
		2 => [
			'title' => 'Rewards',
			'icon' => 'glyphicon glyphicon-gift',
			'content' => $this->render('_formReward',[
                            'model' => $modelReward,
                            ]),
		],
                3 => [
			'title' => 'Story',
			'icon' => 'glyphicon glyphicon-film',
			'content' => $this->render('_formStory',[
                            'model' => $modelStory,
                            ]),
		],
                4 => [
			'title' => 'About yourself',
			'icon' => 'glyphicon glyphicon-education',
			'content' => $this->render('_formYourself',[
                            'model' => $modelYourself,
                            ]),
		],
	],
	'complete_content' => "You are done!", // Optional final screen
	//'start_step' => 2, // Optional, start with a specific step
];
?>

<?= \drsdre\wizardwidget\WizardWidget::widget($wizard_config); ?>
          </div>
        </div>
      </div>
    </div>
   
</div>
