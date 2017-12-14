<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "campaign_yourself".
 *
 * @property integer $y_id
 * @property integer $c_id
 * @property string $y_email
 * @property string $y_fund_recipient
 * @property integer $y_bank_acc_details
 * @property string $y_payment_source
 */
class CampaignYourself extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'campaign_yourself';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['c_id', 'y_email', 'y_fund_recipient', 'y_bank_acc_details', 'y_payment_source'], 'required'],
            [['c_id', 'y_bank_acc_details'], 'integer'],
            [['y_email', 'y_fund_recipient', 'y_payment_source'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'y_id' => 'Y ID',
            'c_id' => 'C ID',
            'y_email' => 'Email',
            'y_fund_recipient' => 'Fund Recipient',
            'y_bank_acc_details' => 'Bank Account Details',
            'y_payment_source' => 'Payment Source',
        ];
    }
}
