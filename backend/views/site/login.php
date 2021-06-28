<?php
use yii\helpers\Html;
// use yii\bootstrap\ActiveForm;
use kartik\widgets\ActiveForm;
use backend\assets\LoginAsset;
use backend\assets\AppAsset;

LoginAsset::register($this);

$this->title = 'Sign In';

$dirAssests = Yii::$app->assetManager->getPublishedUrl('@backend/assets/loginAsset');

?>

<style type="text/css">
  
.wrap-login100 {
    padding: 120px 130px 120px 95px !important;
}
</style>

<div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="<?= $dirAssests?>/images/img-01.png" alt="IMG">
                </div>

                <div class="login100-form validate-form">
                    <span class="login100-form-title">
                        Admin Login
                    </span>

                    <?php $form = ActiveForm::begin(['id' => 'login100-form', 'enableClientValidation' => false]); ?>
                    <!-- <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                        <input class="input100" type="text" name="email" placeholder="Email">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-user" aria-hidden="true"></i>
                        </span>
                    </div> -->
                    <?= $form->field($model, 'username', ['template' => '
                           <div class="wrap-input100">
                                <span class="focus-input100"></span>
                                <span class="symbol-input100">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                </span>
                              {input}
                           </div>
                           {error}{hint}
                           '])->textInput(['placeholder' => $model->getAttributeLabel('username'), 'class' => 'input100'])
                    ?>

                    <!-- <div class="wrap-input100 validate-input" data-validate = "Password is required">
                        <input class="input100" type="password" name="pass" placeholder="Password">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div> -->
                    <?= $form->field($model, 'password', ['template' => '
                           <div class="wrap-input100">
                                <span class="focus-input100"></span>
                                <span class="symbol-input100">
                                    <i class="fa fa-lock" aria-hidden="true"></i>
                                </span>
                              {input}
                           </div>
                           {error}{hint}
                           '])->passwordInput(['placeholder' => 'Password', 'class' => 'input100'])
                        ?>
                    <div class="container-login100-form-btn">
                        <?= Html::submitButton('Login', ['class' => 'login100-form-btn', 'name' => 'login-button']) ?>
                    </div>
                    <?php ActiveForm::end(); ?>
                </div>
            </div>
        </div>
    </div>

