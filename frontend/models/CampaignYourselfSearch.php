<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\CampaignYourself;

/**
 * CampaignYourselfSearch represents the model behind the search form about `frontend\models\CampaignYourself`.
 */
class CampaignYourselfSearch extends CampaignYourself
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['y_id', 'c_id', 'y_bank_acc_details'], 'integer'],
            [['y_email', 'y_fund_recipient', 'y_payment_source'], 'safe'],
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
        $query = CampaignYourself::find();

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
            'y_id' => $this->y_id,
            'c_id' => $this->c_id,
            'y_bank_acc_details' => $this->y_bank_acc_details,
        ]);

        $query->andFilterWhere(['like', 'y_email', $this->y_email])
            ->andFilterWhere(['like', 'y_fund_recipient', $this->y_fund_recipient])
            ->andFilterWhere(['like', 'y_payment_source', $this->y_payment_source]);

        return $dataProvider;
    }
}
