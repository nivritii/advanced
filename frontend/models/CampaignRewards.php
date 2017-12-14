<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "campaign_rewards".
 *
 * @property integer $r_id
 * @property integer $c_id
 * @property string $r_title
 * @property integer $r_pledge_amt
 * @property string $r_description
 * @property string $r_delivery_date
 * @property integer $r_limit_availability
 */
class CampaignRewards extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'campaign_rewards';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['c_id', 'r_title', 'r_pledge_amt', 'r_description', 'r_delivery_date', 'r_limit_availability'], 'required'],
            [['c_id', 'r_pledge_amt', 'r_limit_availability'], 'integer'],
            [['r_delivery_date'], 'safe'],
            [['r_title', 'r_description'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            //'r_id' => 'R ID',
            //'c_id' => 'C ID',
            'r_title' => 'Title',
            'r_pledge_amt' => 'Pledge Amt',
            'r_description' => 'Description',
            'r_delivery_date' => 'Delivery Date',
            'r_limit_availability' => 'Limit Availability',
        ];
    }
}
