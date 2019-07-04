<?php

namespace frontend\modules\participation_in_cunstruction\models\searchModels;

use frontend\modules\participation_in_cunstruction\models\ParticipationInCunstruction;
use yii\base\Model;
use yii\data\ActiveDataProvider;

/**
 * EstateAgensySearch represents the model behind the search form of `frontend\modules\participationinmaking\models\EstateAgensy`.
 */
class ParticipationInCunstructionSearch extends ParticipationInCunstruction
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'ad_id', 'ad_advertiser_id'], 'integer'],
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
        $query = ParticipationInCunstruction::find();

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
            'ad_advertiser_id' => $this->ad_advertiser_id,
        ]);

        return $dataProvider;
    }
}
