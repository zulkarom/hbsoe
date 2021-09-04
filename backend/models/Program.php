<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "program".
 *
 * @property int $id
 * @property string $prog_name
 * @property int $prog_category
 * @property string $prog_other
 * @property string $prog_date
 * @property string $prog_description
 * @property int $prog_anjuran
 * @property string $created_at
 * @property string $updated_at
 *
 * @property ProgramCategory $progCategory
 */
class Program extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'program';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['prog_name', 'prog_category', 'prog_date', 'prog_description', 'prog_anjuran'], 'required'],
            [['prog_category', 'prog_anjuran'], 'integer'],
            [['prog_date', 'created_at', 'updated_at'], 'safe'],
            [['prog_description'], 'string'],
            [['prog_name', 'prog_other', 'anjuran_other'], 'string', 'max' => 225],
            [['prog_category'], 'exist', 'skipOnError' => true, 'targetClass' => ProgramCategory::className(), 'targetAttribute' => ['prog_category' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'prog_name' => 'Program Name',
            'prog_category' => 'Program Category',
            'prog_other' => 'Program Other',
            'prog_date' => 'Program Date',
            'prog_description' => 'Program Description',
            'prog_anjuran' => 'Program Anjuran',
            'anjuran_other' => 'Anjuran Other',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * Gets query for [[ProgCategory]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProgCategory()
    {
        return $this->hasOne(ProgramCategory::className(), ['id' => 'prog_category']);
    }
}
