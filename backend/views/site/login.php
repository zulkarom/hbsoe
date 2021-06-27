<style type="text/css">
  
.center {
  padding: 200px 0;
  text-align: center;
}
</style>

<?php
use yii\helpers\Html;
// use yii\bootstrap\ActiveForm;
use kartik\widgets\ActiveForm;
use backend\assets\CryptoAsset;
use backend\assets\AppAsset;

AppAsset::register($this);
CryptoAsset::register($this);

$this->title = 'Sign In';

$dirAssests = Yii::$app->assetManager->getPublishedUrl('@backend/assets/crypto');

?>
<div class="center">
<div class="row justify-content-center">
    <div class="col-lg-12">
        
            <div class="row justify-content-center">
              
                <div class="col-lg-6">
                    <!-- sign_in  -->
                    <div class="modal-content cs_modal">
                        <div class="modal-header justify-content-center theme_bg_1">
                            <h5 class="modal-title text_white">Sign in to start your session</h5>
                        </div>
                        
                        <div class="modal-body">
                            <?php $form = ActiveForm::begin(['id' => 'login-form', 'enableClientValidation' => false]); ?>
                                <div class="form-group">
                                    <?= $form
                                      ->field($model, 'username')
                                      ->label(false)
                                      ->textInput(['placeholder' => $model->getAttributeLabel('username')])
                                    ?>
                                </div>
                                <div class="form-group">
                                    <?= $form
                                      ->field($model, 'password')
                                      ->label(false)
                                      ->passwordInput(['placeholder' => $model->getAttributeLabel('password')])
                                    ?>
                                </div>

                                <?= Html::submitButton('Log in', ['class' => 'btn_1 full_width text-center', 'name' => 'login-button']) ?>
                            <?php ActiveForm::end(); ?>
                        </div>
                    </div>
                </div>
            </div>
            
        
    </div>
</div>
</div>