<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "economic".
 *
 * @property int $id
 * @property int $entrepreneur_id
 * @property string|null $description
 * @property int $category_id
 * @property string $other
 *
 * @property EconomicCategory $category
 */
class Economic extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'economic';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['entrepreneur_id', 'category_id'], 'required'],
            [['entrepreneur_id', 'category_id'], 'integer'],
            [['description'], 'string', 'max' => 255],
            [['other'], 'string', 'max' => 225],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => EconomicCategory::className(), 'targetAttribute' => ['category_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'entrepreneur_id' => \Yii::t('app', 'Beneficiary'),
            'entrepreneurName' => \Yii::t('app', 'Beneficiary'),
            'economicName' => \Yii::t('app', 'Economic'),
            'description' => \Yii::t('app', 'Description'),
            'category_id' => \Yii::t('app', 'Category'),
        ];
    }

    public function getEntrepreneur(){
        return $this->hasOne(Entrepreneur::className(), ['id' => 'entrepreneur_id']);
    }
    
    public function getEntrepreneurName(){
        return $this->entrepreneur->user->fullname;
    }

    public function getEconomicName(){
        return $this->category->category_name;
    }

    /**
     * Gets query for [[Category]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(EconomicCategory::className(), ['id' => 'category_id']);
    }

    public static function countEconomic(){
        return self::find()
        ->count();
    }
}
