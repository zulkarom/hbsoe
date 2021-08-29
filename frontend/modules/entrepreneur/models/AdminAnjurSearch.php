<?php

namespace frontend\modules\entrepreneur\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\AdminAnjur;

/**
 * KursusAnjurSearch represents the model behind the search form of `backend\models\KursusAnjur`.
 */
class AdminAnjurSearch extends AdminAnjur
{
    public $kategori;
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'capacity', 'module_id', 'kategori'], 'integer'],
            [['module_siri', 'date_start', 'date_end', 'location'], 'safe'],
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
        $query = AdminAnjur::find()
        ->joinWith('module')
        ->where(['kategori_id' => $this->kategori]);

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
            'date_start' => $this->date_start,
            'date_end' => $this->date_end,
            'capacity' => $this->capacity,
            'module_id' => $this->module_id,
        ]);

        $query->andFilterWhere(['like', 'module_siri', $this->module_siri])
            ->andFilterWhere(['like', 'location', $this->location]);

        return $dataProvider;
    }
}
