<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Program;

/**
 * ProgramSearch represents the model behind the search form of `backend\models\Program`.
 */
class ProgramSearch extends Program
{
    public $limit;
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['entrepreneur_id', 'prog_category', 'prog_anjuran'], 'integer'],
            [['prog_name', 'prog_other', 'prog_date', 'prog_description', 'created_at', 'updated_at'], 'safe'],
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
        if($this->limit > 0){
           $query = Program::find()->limit($this->limit); 
           $pagination = false;
        }
        else{
            $query = Program::find();
            $pagination = ['pageSize' => 50];
            
        }

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => $pagination,

        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'entrepreneur_id' => $this->entrepreneur_id,
            'prog_category' => $this->prog_category,
            'prog_date' => $this->prog_date,
            'prog_anjuran' => $this->prog_anjuran,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'prog_name', $this->prog_name])
            ->andFilterWhere(['like', 'prog_other', $this->prog_other])
            ->andFilterWhere(['like', 'prog_description', $this->prog_description]);

        return $dataProvider;
    }
}
