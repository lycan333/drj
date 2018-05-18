<?php

namespace app\Searchmodels;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\DarsRejasi;

/**
 * DarsRejasiSearch represents the model behind the search form of `app\models\DarsRejasi`.
 */
class DarsRejasiSearch extends DarsRejasi
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'Fan_id', 'xona_id', 'para', 'kun', 'Fantype', 'Gid'], 'integer'],
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
        $query = DarsRejasi::find();

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
            'Fan_id' => $this->Fan_id,
            'xona_id' => $this->xona_id,
            'para' => $this->para,
            'kun' => $this->kun,
            'Fantype' => $this->Fantype,
            'Gid' => $this->Gid,
        ]);

        return $dataProvider;
    }
}
