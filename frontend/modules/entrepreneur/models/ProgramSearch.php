<?php

namespace frontend\modules\entrepreneur\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Program;

/**
 * ProgramSearch represents the model behind the search form of `backend\models\Program`.
 */
class ProgramSearch extends Program
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'prog_category', 'prog_anjuran'], 'integer'],
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
        $query = Program::find()
        ->where(['entrepreneur_id' => Yii::$app->user->identity->entrepreneur->id]);

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
