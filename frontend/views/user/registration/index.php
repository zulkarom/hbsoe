<style type="text/css">
  
.center {
  padding: 200px 0;
  text-align: center;
}
.p-t-136 {
    padding-top: 30px !important;
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
                    <br/><br/><br/><br/>
                    <img src="<?= $dirAssests?>/images/img-01.png" alt="IMG">

                </div>

                <div class="login100-form validate-form">
                    <span class="login100-form-title">
                        Register
                    </span>

                
                </div>
            </div>
        </div>
    </div>

