<?php

namespace frontend\modules\mobile_and_tablet_sim_card\models\searchModels;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\modules\mobile_and_tablet_sim_card\models\MobileAndTabletSimCard;

/**
 * MobileAndTabletSimCardSearch represents the model behind the search form of `frontend\modules\mobile_and_tablet_sim_card\models\MobileAndTabletSimCard`.
 */
class MobileAndTabletSimCardSearch extends MobileAndTabletSimCard
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'ad_id', 'sim_card_type_id', 'ad_type_id'], 'integer'],
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
        $query = MobileAndTabletSimCard::find();

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
            'sim_card_type_id' => $this->sim_card_type_id,
            'ad_type_id' => $this->ad_type_id,
        ]);

        return $dataProvider;
    }
}
