<?php

namespace common\models\i_do_section\models\searchModels;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\i_do_section\models\IDoAd;

/**
 * IDoAdSearch represents the model behind the search form of `common\models\i_do_section\models\IDoAd`.
 */
class IDoAdSearch extends IDoAd
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'cat_id', 'city_id', 'city_range_id', 'pic_counts', 'status', 'chat', 'expired', 'user_id', 'created_at', 'updated_at', 'published_at'], 'integer'],
            [['title', 'desc', 'price', 'mobile', 'org_pic'], 'safe'],
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
        $query = IDoAd::find();

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
            'city_id' => $this->city_id,
            'city_range_id' => $this->city_range_id,
            'pic_counts' => $this->pic_counts,
            'status' => $this->status,
            'chat' => $this->chat,
            'expired' => $this->expired,
            'user_id' => $this->user_id,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'published_at' => $this->published_at,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'desc', $this->desc])
            ->andFilterWhere(['like', 'price', $this->price])
            ->andFilterWhere(['like', 'mobile', $this->mobile])
            ->andFilterWhere(['like', 'org_pic', $this->org_pic]);

        return $dataProvider;
    }
}
