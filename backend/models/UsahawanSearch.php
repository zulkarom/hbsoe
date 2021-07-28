<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Usahawan;

/**
 * UsahawanSearch represents the model behind the search form of `backend\models\Usahawan`.
 */
class UsahawanSearch extends Usahawan
{
    public $name;
    public $email;
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'user_id', 'age', 'city'], 'integer'],
            [['name', 'email'], 'string'],
            [['address', 'postcode', 'state', 'location', 'longitude', 'latitude', 'profile_file'], 'safe'],
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
        $query = Usahawan::find()
        ->joinWith(['user']);

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
            'user_id' => $this->user_id,
            'age' => $this->age,
            'city' => $this->city,
        ]);

        $query->andFilterWhere(['like', 'user.fullname', $this->name]);
        $query->andFilterWhere(['like', 'user.email', $this->email]);

        return $dataProvider;
    }
}
