<?php

namespace frontend\modules\land_sell\models\seachModels;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\modules\land_sell\models\LandSell;

/**
 * LandSellSearch represents the model behind the search form of `frontend\modules\land_sell\models\LandSell`.
 */
class LandSellSearch extends LandSell
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'ad_id', 'area', 'ad_type_id', 'ad_advertiser_id'], 'integer'],
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
        $query = LandSell::find();

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
        ]);

        $query->andFilterWhere(['like', 'national_code', $this->national_code]);

        return $dataProvider;
    }
}
