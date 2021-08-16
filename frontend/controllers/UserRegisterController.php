<?php

namespace frontend\controllers;

use Yii;
use frontend\models\user\User;
use frontend\models\SignupForm;
use yii\filters\VerbFilter;

class UserRegisterController extends \yii\web\Controller
{	
    // public function behaviors()
    // {
    //     return [
    //         'verbs' => [
    //             'class' => VerbFilter::className(),
    //             'actions' => [
    //                 'delete' => ['POST'],
    //             ],
    //         ],
    //     ];
    // }

	public function actionRegister(){

        $this->layout = "//main-login";
        
        $model = new SignupForm();

        echo 'hello';
        die();
        
        if ($model->load(Yii::$app->request->post())){
       
        	$checkUser = User::findOne(['username' => $model->username]);

        	if($checkUser){
        	    if(User::checkRoleExistByUsername($model->username, $model->role)){
        	        Yii::$app->session->addFlash('danger', "Akaun anda telah berdaftar dengan sistem ini.");
        	    }else{
    	            if ($model->signup()) {
    	                Yii::$app->session->addFlash('success', "Pendaftaran Berjaya");
    	                return $this->redirect(['register2']);
    	            }else{
    	                Yii::$app->session->addFlash('danger', "Pendaftaran Gagal.");
    	            }
    	       }
        	}else{
        		return $this->redirect(array('/user/register', 'param1'=> $model->username, 'param2'=> $model->role));
        	}

        }
        
        return $this->render('/user/registration/index', [
            'model' => $model,
        ]);
    }
	
	public function actionRegister2(){
		$this->layout = "//main-login";
        return $this->render('/user/registration/register2', [
        ]);
    }
	

}
