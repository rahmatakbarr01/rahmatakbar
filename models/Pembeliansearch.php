<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Pembelian;

/**
 * Pembeliansearch represents the model behind the search form of `app\models\Pembelian`.
 */
class Pembeliansearch extends Pembelian
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_faktur', 'id_supplier', 'id_pegawai'], 'integer'],
            [['tanggal', 'total'], 'safe'],
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
        $query = Pembelian::find();

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
            'id_supplier' => $this->id_supplier,
            'id_pegawai' => $this->id_pegawai,
            'tanggal' => $this->tanggal,
        ]);

        $query->andFilterWhere(['like', 'total', $this->total]);

        return $dataProvider;
    }
}
