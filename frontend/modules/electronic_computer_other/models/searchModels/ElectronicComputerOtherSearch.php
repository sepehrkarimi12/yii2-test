<?php

namespace frontend\modules\electronic_computer_other\models\searchModels;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\modules\electronic_computer_other\models\ElectronicComputerOther;

/**
 * ElectronicComputerOtherSearch represents the model behind the search form of `frontend\modules\electronic_computer_other\models\ElectronicComputerOther`.
 */
class ElectronicComputerOtherSearch extends ElectronicComputerOther
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'ad_id', 'ad_type_id'], 'integer'],
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
        $query = ElectronicComputerOther::find();

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
            'ad_type_id' => $this->ad_type_id,
        ]);

        return $dataProvider;
    }
}
