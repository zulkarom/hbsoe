<?php

namespace frontend\controllers\user;

use Yii;
use dektrium\user\controllers\SecurityController as BaseSecurityController;
use frontend\models\user\LoginForm;
use frontend\models\KadetLevel;
use common\models\User;

class SecurityController extends BaseSecurityController
{
    public function actionLogin()
    {
        $this->layout = "//main-login";
        if (!\Yii::$app->user->isGuest) {
            //$this->goHome();
            $this->redirect(['/dashboard/index']);
        }

        /** @var LoginForm $model */
        $model = \Yii::createObject(LoginForm::className());
        $event = $this->getFormEvent($model);

        $this->performAjaxValidation($model);

        $this->trigger(self::EVENT_BEFORE_LOGIN, $event);

        if ($model->load(\Yii::$app->getRequest()->post()) && $model->login()) {
            
            if($model->role == 1){
                return $this->redirect(['/usahawan/dashboard/index']);
            }else if($model->role == 2){
                return $this->redirect(['/supplier/dashboard/index']);
            }
        }

        return $this->render('login', [
            'model'  => $model,
            'module' => $this->module,
        ]);
        
    }
	
	public function actionLogout()
    {
        $event = $this->getUserEvent(\Yii::$app->user->identity);

        $this->trigger(self::EVENT_BEFORE_LOGOUT, $event);

        \Yii::$app->getUser()->logout();

        $this->trigger(self::EVENT_AFTER_LOGOUT, $event);

        return $this->redirect(['/user/login']);
    }
}
