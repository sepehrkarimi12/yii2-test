<?php

namespace frontend\modules\vehicle_car_riding\models\searchModels;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\modules\vehicle_car_riding\models\VehicleCarRiding;

/**
 * VehicleCarRidingSearch represents the model behind the search form of `frontend\modules\vehicle_car_riding\models\VehicleCarRiding`.
 */
class VehicleCarRidingSearch extends VehicleCarRiding
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'ad_id', 'brand_id', 'color_id', 'ad_type_id', 'created_year_id', 'miles'], 'integer'],
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
        $query = VehicleCarRiding::find();

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
            'brand_id' => $this->brand_id,
            'color_id' => $this->color_id,
            'ad_type_id' => $this->ad_type_id,
            'created_year_id' => $this->created_year_id,
            'miles' => $this->miles,
        ]);

        $query->andFilterWhere(['like', 'national_code', $this->national_code]);

        return $dataProvider;
    }
}
