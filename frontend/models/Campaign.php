<?php

namespace frontend\models;

use Yii;


/**
 * This is the model class for table "campaign".
 *
 * @property string $c_title
 * @property string $c_image
 * @property string $c_description
 * @property string $c_start_date
 * @property string $c_end_date
 * @property integer $c_goal
 * @property integer $c_id
 * @property string $c_author
 */
class Campaign extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public $file;

    public static function tableName()
    {
        return 'campaign';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['c_title', 'c_description', 'c_start_date', 'c_end_date', 'c_goal', 'c_author'], 'required'],
            [['c_description'], 'string'],
            [['c_start_date', 'c_end_date'], 'safe'],
            [['c_goal'], 'integer'],
            [['file'],'file'],
            [['c_title','c_image'], 'string', 'max' => 100],
            [['c_author'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'c_title' => 'Title',
            'file' => 'Image',
            'c_description' => 'Description',
            'c_start_date' => 'Start Date',
            'c_end_date' => 'End Date',
            'c_goal' => 'Goal',
            'c_id' => 'ID',
            'c_author' => 'Author',
        ];
    }
}
