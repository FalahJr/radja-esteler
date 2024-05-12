<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Wisata;

/**
 * WisataSearch represents the model behind the search form of `app\models\Wisata`.
 */
class WisataSearch extends Wisata
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'wisata_kategori_id'], 'integer'],
            [['judul', 'deskripsi', 'alamat', 'latitude_y', 'longitude_x', 'created_at', 'update_at', 'created_date', 'update_date'], 'safe'],
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
        $query = Wisata::find();

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
            'wisata_kategori_id' => $this->wisata_kategori_id,
            'created_date' => $this->created_date,
            'update_date' => $this->update_date,
        ]);

        $query->andFilterWhere(['like', 'judul', $this->judul])
            ->andFilterWhere(['like', 'deskripsi', $this->deskripsi])
            ->andFilterWhere(['like', 'alamat', $this->alamat])
            ->andFilterWhere(['like', 'latitude_y', $this->latitude_y])
            ->andFilterWhere(['like', 'longitude_x', $this->longitude_x])
            ->andFilterWhere(['like', 'created_at', $this->created_at])
            ->andFilterWhere(['like', 'update_at', $this->update_at]);

        return $dataProvider;
    }
}
