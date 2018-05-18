<?php

namespace app\Searchmodels;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Groups;

/**
 * GroupsSearch represents the model behind the search form of `app\models\Groups`.
 */
class GroupsSearch extends Groups
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'kurs', 'Fakul_ID', 'tsoni', 'flow_id', 'study_year', 'status'], 'integer'],
            [['nomi'], 'safe'],
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
        $query = Groups::find();

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
            'kurs' => $this->kurs,
            'Fakul_ID' => $this->Fakul_ID,
            'tsoni' => $this->tsoni,
            'flow_id' => $this->flow_id,
            'study_year' => $this->study_year,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'nomi', $this->nomi]);

        return $dataProvider;
    }
}
