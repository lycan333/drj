<?php

namespace app\Searchmodels;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Xona;

/**
 * XonaSearch represents the model behind the search form of `app\models\Xona`.
 */
class XonaSearch extends Xona
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id','Xona_Turi'  , 'T_soni', 'Korpus_id', 'status'], 'integer'],
            [['num'], 'string'],
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
        $query = Xona::find();

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
            'Xona_Turi' => $this->Xona_Turi,
            'num' => $this->num,
            'T_soni' => $this->T_soni,
            'Korpus_id' => $this->Korpus_id,
            'status' => $this->status,
        ]);

        return $dataProvider;
    }
}
