<?php

namespace frontend\modules\entrepreneur\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\EntrepreneurSupplier;
use backend\models\SectorSupplier;
use backend\models\Supplier;
use Yii;

/**
 * EntrepreneurSupplierSearch represents the model behind the search form of `backend\models\EntrepreneurSupplier`.
 */
class SupplierSearch extends EntrepreneurSupplier
{
    public $sector = null;
    public $location = null;
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['sector', 'location'], 'string'],
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
        $query = SectorSupplier::find()->joinWith(['supplier.cityModel c', 'supplier.stateModel s', 'sector']);

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);
        

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
             $query->where('0=1');
            return $dataProvider;
        }
        
        if(!$this->location && !$this->sector){
           $query->where('0=1');
        }


        
        $query->andFilterWhere(['or',
            ['like', 'description', $this->sector],
            ['like', 'sector.sector_name', $this->sector]
        ]);
        
        $query->andFilterWhere(['or',
            ['like', 's.negeri_name', $this->location],
            ['like', 'c.daerah_name', $this->location],
        ]);
        

        return $dataProvider;
    }
}
