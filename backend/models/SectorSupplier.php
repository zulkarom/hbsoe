<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "sector_supplier".
 *
 * @property int $id
 * @property int $supplier_id
 * @property string|null $description
 */
class SectorSupplier extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sector_supplier';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['supplier_id', 'sector_id', 'description'], 'required'],
            [['supplier_id' , 'sector_id'], 'integer'],
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
            'supplier_id' => 'Supplier',
            'supplierName' => 'Supplier',
            'sector_id' => 'Sector',
            'sectorName' => 'Sector',
            'description' => 'Description',
            'descriptionx' => 'Description',
        ];
    }
    
    public function getSector(){
        return $this->hasOne(Sector::className(), ['id' => 'sector_id']);
    }
    
    public function getSupplier(){
        return $this->hasOne(Supplier::className(), ['id' => 'supplier_id']);
    }
    
    public function getSectorName(){
        return $this->sector->sector_name;
    }
    
    public function getSupplierName(){
        return $this->supplier->user->fullname;
    }
    
    public function getDescriptionx(){
        return $this->description;
    }
}
