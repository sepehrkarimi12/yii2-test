<?php

namespace backend\modules\category_model_address\models\searchModels;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\modules\category_model_address\models\CategoryModelAddress;

/**
 * CategoryModelAddressSearch represents the model behind the search form of `backend\modules\category_model_address\models\CategoryModelAddress`.
 */
class CategoryModelAddressSearch extends CategoryModelAddress
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'cat_id'], 'integer'],
            [['model_address'], 'safe'],
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
        $query = CategoryModelAddress::find();

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
            'cat_id' => $this->cat_id,
        ]);

        $query->andFilterWhere(['like', 'model_address', $this->model_address]);

        return $dataProvider;
    }
}
