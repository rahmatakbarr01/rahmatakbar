<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Detaipembelian;

/**
 * Detaipembeliansearch represents the model behind the search form of `app\models\Detaipembelian`.
 */
class Detaipembeliansearch extends Detaipembelian
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_faktur', 'id_barang'], 'integer'],
            [['jumlah'], 'safe'],
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
        $query = Detaipembelian::find();

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
            'no_faktur' => $this->no_faktur,
            'id_barang' => $this->id_barang,
        ]);

        $query->andFilterWhere(['like', 'jumlah', $this->jumlah]);

        return $dataProvider;
    }
}
