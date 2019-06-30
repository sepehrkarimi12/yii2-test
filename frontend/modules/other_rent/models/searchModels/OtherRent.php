<?php

namespace frontend\modules\other_rent\models\searchModels;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\modules\other_rent\models\OtherRent as OtherRentModel;

/**
 * OtherRent represents the model behind the search form of `frontend\modules\other_rent\models\OtherRent`.
 */
class OtherRent extends OtherRentModel
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'ad_id', 'area', 'ad_type_id', 'ad_advertiser_id', 'deposit', 'rent_value', 'room_count_id', 'created_year_id'], 'integer'],
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
        $query = OtherRentModel::find();

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
            'deposit' => $this->deposit,
            'rent_value' => $this->rent_value,
            'room_count_id' => $this->room_count_id,
            'created_year_id' => $this->created_year_id,
        ]);

        return $dataProvider;
    }
}
