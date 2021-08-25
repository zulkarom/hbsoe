<style type="text/css">
  
.center {
  padding: 200px 0;
  text-align: center;
}
.p-t-136 {
    padding-top: 30px !important;
}

.wrap-login100 {
    padding: 50px 130px 33px 95px !important;
}
</style>

<?php

use yii\helpers\Html;
use kartik\widgets\ActiveForm;
use yii\helpers\Url;
use common\models\Common;


$dirAssests = Yii::$app->assetManager->getPublishedUrl('@backend/assets/loginAsset');

$this->title = 'Sign Up';
$this->params['breadcrumbs'][] = $this->title;

?>

<div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="<?= $dirAssests?>/images/logo.png" alt="IMG">
                </div>

                <div class="login100-form validate-form">
                    <span class="login100-form-title">
                        <br/><br/>
                        <b>REGISTRATION</b>
                    </span>
                    <center><b>Thank You. Your account successfully registered.</b></center>
 
                    <div class="text-center p-t-136">
                        <?= Html::a('Go to Login Page <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>', ['/user/security/login'], ['class' => 'txt2']) ?>
                        <!-- <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i> -->
                    </div>
                </div>
            </div>
        </div>
    </div>

