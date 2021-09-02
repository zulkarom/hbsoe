<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "economic".
 *
 * @property int $id
 * @property int $entrepreneur_id
 * @property string|null $description
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
            [['entrepreneur_id', 'description'], 'required'],
            [['entrepreneur_id'], 'integer'],
            [['description'], 'string', 'max' => 255],
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
        ];
    }
    
    public function getEntrepreneur(){
        return $this->hasOne(Entrepreneur::className(), ['id' => 'entrepreneur_id']);
    }
    
    public function getEntrepreneurName(){
        return $this->entrepreneur->user->fullname;
    }
}
