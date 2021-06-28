<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "supplier".
 *
 * @property int $id
 * @property int $user_id
 * @property int $age
 * @property string $address
 * @property string $location
 * @property string $profile_file
 */
class Supplier extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'supplier';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'age', 'address', 'location', 'profile_file'], 'required'],
            [['user_id', 'age'], 'integer'],
            [['address', 'location', 'profile_file'], 'string', 'max' => 225],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'age' => 'Age',
            'address' => 'Address',
            'location' => 'Location',
            'profile_file' => 'Profile File',
        ];
    }
}
