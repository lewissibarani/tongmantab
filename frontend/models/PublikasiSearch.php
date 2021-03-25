<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Publikasi;

/**
 * PublikasiSearch represents the model behind the search form of `frontend\models\Publikasi`.
 */
class PublikasiSearch extends Publikasi
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'arcnon', 'userid'], 'integer'],
            [['namapublikasi', 'linkdownload', 'tanggalrilis', 'tanggaluploadportal', 'time'], 'safe'],
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
        $query = Publikasi::find();

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
            'arcnon' => $this->arcnon,
            'tanggalrilis' => $this->tanggalrilis,
            'tanggaluploadportal' => $this->tanggaluploadportal,
            'time' => $this->time,
            'userid' => $this->userid,
        ]);

        $query->andFilterWhere(['like', 'namapublikasi', $this->namapublikasi])
            ->andFilterWhere(['like', 'linkdownload', $this->linkdownload]);

        return $dataProvider;
    }
}
