<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "campaign_story".
 *
 * @property integer $s_id
 * @property integer $c_id
 * @property string $s_video
 * @property string $s_description
 */
class CampaignStory extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'campaign_story';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['c_id', 's_video', 's_description'], 'required'],
            [['c_id'], 'integer'],
            [['s_video', 's_description'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            's_id' => 'S ID',
            'c_id' => 'C ID',
            's_video' => 'Video',
            's_description' => 'Description',
        ];
    }
}
