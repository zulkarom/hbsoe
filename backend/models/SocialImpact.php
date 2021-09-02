<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "social_impact".
 *
 * @property int $id
 * @property int $entrepreneur_id
 * @property string|null $description
 */
class SocialImpact extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'social_impact';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['entrepreneur_id', 'category_id', 'other'], 'required'],
            [['entrepreneur_id', 'category_id'], 'integer'],
            [['description'], 'string', 'max' => 255],
            [['other'], 'string', 'max' => 225],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => SocialImpactCategory::className(), 'targetAttribute' => ['category_id' => 'id']],
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
            'description' => \Yii::t('app', 'Description'),
            'category_id' => \Yii::t('app', 'Category'),
        ];
    }

    public function getCategory()
    {
        return $this->hasOne(SocialImpactCategory::className(), ['id' => 'category_id']);
    }
    
    public function getEntrepreneur(){
        return $this->hasOne(Entrepreneur::className(), ['id' => 'entrepreneur_id']);
    }
    
    public function getEntrepreneurName(){
        return $this->entrepreneur->user->fullname;
    }
}
