<?php

namespace frontend\modules\ad_section\vehicle_motorcycle_and_spare_part\models\searchModels;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\modules\ad_section\vehicle_motorcycle_and_spare_part\models\VehicleMotorcycleAndSparePart;

/**
 * VehicleMotorcycleAndSparePartSearch represents the model behind the search form of `frontend\modules\ad_section\vehicle_motorcycle_and_spare_part\models\VehicleMotorcycleAndSparePart`.
 */
class VehicleMotorcycleAndSparePartSearch extends VehicleMotorcycleAndSparePart
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'ad_id', 'created_year_id', 'miles', 'ad_type_id'], 'integer'],
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
        $query = VehicleMotorcycleAndSparePart::find();

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
            'created_year_id' => $this->created_year_id,
            'miles' => $this->miles,
            'ad_type_id' => $this->ad_type_id,
        ]);

        return $dataProvider;
    }
}
