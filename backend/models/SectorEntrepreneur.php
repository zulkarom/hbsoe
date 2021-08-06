<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "sector_entrepreneur".
 *
 * @property int $id
 * @property int $entrepreneur_id
 * @property string|null $description
 */
class SectorEntrepreneur extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sector_entrepreneur';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['entrepreneur_id', 'sector_id', 'description'], 'required'],
            [['entrepreneur_id',  'sector_id'], 'integer'],
            [['description'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'entrepreneur_id' => 'Entrepreneur',
            'entrepreneurName' => 'Entrepreneur',
            'sector_id' => 'Sector',
            'sectorName' => 'Sector',
            'description' => 'Description',
            'descriptionx' => 'Description',
        ];
    }
    
    public function getSector(){
         return $this->hasOne(Sector::className(), ['id' => 'sector_id']);
    }
    
    public function getEntrepreneur(){
        return $this->hasOne(Entrepreneur::className(), ['id' => 'entrepreneur_id']);
    }
    
    public function getEntrepreneurName(){
        return $this->entrepreneur->user->fullname;
    }
    
    public function getSectorName(){
        return $this->sector->sector_name;
    }
    
    
    
    public function getDescriptionx(){
        return $this->description;
    }

}
