<?php

namespace frontend\modules\home_sell\models\searchModels;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\modules\home_sell\models\HomeSell;

/**
 * HomeSellSearch represents the model behind the search form of `frontend\modules\home_sell\models\HomeSell`.
 */
class HomeSellSearch extends HomeSell
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'ad_id', 'area', 'ad_type_id', 'ad_advertiser_id', 'room_count_id', 'created_year_id'], 'integer'],
            [['national_code'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = HomeSell::find();

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
            'id' => $this->id,
            'ad_id' => $this->ad_id,
            'area' => $this->area,
            'ad_type_id' => $this->ad_type_id,
            'ad_advertiser_id' => $this->ad_advertiser_id,
            'room_count_id' => $this->room_count_id,
            'created_year_id' => $this->created_year_id,
        ]);

        $query->andFilterWhere(['like', 'national_code', $this->national_code]);

        return $dataProvider;
    }
}
