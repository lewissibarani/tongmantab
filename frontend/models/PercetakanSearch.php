<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Percetakan;

/**
 * PercetakanSearch represents the model behind the search form of `frontend\models\Percetakan`.
 */
class PercetakanSearch extends Percetakan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'idpublikasi', 'idkak', 'userid'], 'integer'],
            [['tanggalkirimcetak', 'tanggalselesaicetak', 'catatan', 'time'], 'safe'],
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
        $query = Percetakan::find();

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
            'idpublikasi' => $this->idpublikasi,
            'idkak' => $this->idkak,
            'tanggalkirimcetak' => $this->tanggalkirimcetak,
            'tanggalselesaicetak' => $this->tanggalselesaicetak,
            'time' => $this->time,
            'userid' => $this->userid,
        ]);

        $query->andFilterWhere(['like', 'catatan', $this->catatan]);

        return $dataProvider;
    }
}
