<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "module".
 *
 * @property int $id
 * @property string $module_name
 * @property string $created_at
 * @property string $updated_at
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
            [['module_name'], 'required'],
            [['created_at', 'updated_at'], 'safe'],
            [['module_name'], 'string', 'max' => 250],
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
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
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
