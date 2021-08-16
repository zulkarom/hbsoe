<?php

namespace backend\models;

use Yii;
use common\models\User;
/**
 * This is the model class for table "entrepreneur".
 *
 * @property int $id
 * @property int $user_id
 * @property int $age
 * @property string $address
 * @property string $location
 * @property string $profile_file
 */
class Entrepreneur extends \yii\db\ActiveRecord
{
    public $u_longitude;
    public $u_latitude;
    public $u_location;
    public $rawPassword;
    public $username;
    public $email;
    public $fullname;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'entrepreneur';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id'], 'required', 'on' => 'insert'],

            [['age', 'address', 'postcode', 'city', 'state', 'phone'], 'required', 'on' => 'insert'],
            //Profile image
            ['profile_file', 'image', 'extensions' => 'jpg, jpeg, gif, png', 'on' => ['insert', 'update']],

            //Admin Update
            [['username', 'fullname', 'email'], 'required', 'on' => 'update'],

            [['user_id', 'age'], 'integer'],
            [['address', 'u_location', 'u_longitude', 'u_latitude', 'longitude', 'latitude', 'location', 'biz_name', 'phone'], 'string', 'max' => 225],
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
            'age' => \Yii::t('app', 'Age'),
            'address' => \Yii::t('app', 'Address'),
            'location' => \Yii::t('app', 'Location'),
            'profile_file' => \Yii::t('app', 'Profile Image'),
            'biz_name' => \Yii::t('app', 'Business Name'),
            'fullname' => \Yii::t('app', 'Full Name'),
            'phone' => \Yii::t('app', 'Phone'),
            'email' => \Yii::t('app', 'Email'),
            'postcode' => \Yii::t('app', 'Postcode'),
            'city' => \Yii::t('app', 'City'),
            'state' => \Yii::t('app', 'State'),
        ];
    }

    public function getUser(){
        return $this->hasOne(User::className(), ['id' => 'user_id']);
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
