<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\CampaignStory;

/**
 * CampaignStorySearch represents the model behind the search form about `frontend\models\CampaignStory`.
 */
class CampaignStorySearch extends CampaignStory
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['s_id', 'c_id'], 'integer'],
            [['s_video', 's_description'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = CampaignStory::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            's_id' => $this->s_id,
            'c_id' => $this->c_id,
        ]);

        $query->andFilterWhere(['like', 's_video', $this->s_video])
            ->andFilterWhere(['like', 's_description', $this->s_description]);

        return $dataProvider;
    }
}
