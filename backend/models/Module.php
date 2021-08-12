<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "module".
 *
 * @property int $id
 * @property string $module_name
 * @property int $kategori_id
 */
class Module extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'module';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['module_name', 'kategori_id'], 'required'],
            [['kategori_id'], 'integer'],
            [['module_name'], 'string', 'max' => 225],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'module_name' => 'Module Name',
            'kategori_id' => 'Kategori ID',
        ];
    }

    public function flashError(){
        if($this->getErrors()){
            foreach($this->getErrors() as $error){
                if($error){
                    foreach($error as $e){
                        Yii::$app->session->addFlash('error', $e);
                    }
                }
            }
        }

    }
}
