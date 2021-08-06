<?php

namespace frontend\modules\supplier\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\EntrepreneurSupplier;

/**
 * EntrepreneurSupplierSearch represents the model behind the search form of `backend\models\EntrepreneurSupplier`.
 */
class EntrepreneurSupplierSearch extends EntrepreneurSupplier
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'entrepreneur_id', 'supplier_id', 'created_at'], 'integer'],
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
        $query = EntrepreneurSupplier::find();

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
            'entrepreneur_id' => $this->entrepreneur_id,
            'supplier_id' => $this->supplier_id,
            'created_at' => $this->created_at,
        ]);

        return $dataProvider;
    }
}
