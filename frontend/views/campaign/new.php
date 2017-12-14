<?php

use yii\helpers\Html;
use frontend\models\Campaign;
use frontend\models\CampaignRewards;
use \frontend\models\CampaignStory;
use frontend\models\CampaignYourself;

/* @var $this yii\web\View */
/* @var $model frontend\models\Campaign */

$this->title = 'Start a Campaign';
//$this->params['breadcrumbs'][] = ['label' => 'Campaigns', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<?php     $model = new Campaign(); 
          $modelReward = new CampaignRewards(); 
          $modelStory = new CampaignStory();
          $modelYourself = new CampaignYourself();
?>

<div class="campaign-new container">
<section id="campaign-new" class="parallax section" style="background-image: url(http://themepush.com/demo/runcharity/assets/img/map.png);">
<div class="wrapsection">
	<div class="parallax-overlay" style="background-color: #1cbb9b;opacity:0.95;"></div>
	<div class="container">
		<div class="row">
<!--			<div class="col-md-12">-->
				<div class="maintitle">
					<h3 class="section-title"><?= Html::encode($this->title)?></h3>
					<p class="lead">
                                        Add an image, a goal and/or other important details
					</p>
				</div>
                             
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
                            </section>

<!--				<form id="contact" name="contact" method="post" class="text-left">
					<fieldset>
						<div class="row">
							<div class="col-md-4 wow fadeIn animated animated" data-wow-delay="0.1s" data-wow-duration="2s">
								<label for="name">Name<span class="required">*</span></label>
								<input type="text" name="name" id="name" size="30" value="" required/>
							</div>
							<div class="col-md-4 wow fadeIn animated" data-wow-delay="0.3s" data-wow-duration="2s">
								<label for="email">Email<span class="required">*</span></label>
								<input type="text" name="email" id="email" size="30" value="" required/>
							</div>
							<div class="col-md-4 wow fadeIn animated" data-wow-delay="0.3s" data-wow-duration="2s">
								<label for="phone">Phone</label>
								<input type="text" name="phone" id="phone" size="30" value=""/>
							</div>
						</div>
						<div class="wow fadeIn animated" data-wow-delay="0.3s" data-wow-duration="1.5" style="margin-top:15px;">
							<label for="message">Message<span class="required">*</span></label>
							<textarea name="message" id="message" required></textarea>
						</div>
						<div class="wow fadeIn animated" data-wow-delay="0.3" data-wow-duration="1.5s">
							<input id="submit" type="submit" name="submit" value="Send"/>
						</div>
					</fieldset>
				</form>-->
<!--				<div id="success">		
					<p class="contactalert">
						Your message was sent succssfully! I will be in touch as soon as I can.
					</p>			
				</div>
				<div id="error">			
					<p class="contactalert">
						 Something went wrong, try refreshing and submitting the form again.
					</p>			
                            	</div>-->
</div> 
			</div>
		</div>
	</div>
</div>


    <h1><?= Html::encode($this->title) ?></h1>

   

</div>