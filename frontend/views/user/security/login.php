<?php
use yii\helpers\Html;
use kartik\widgets\ActiveForm;
use yii\helpers\Url;
use common\models\Common;
use dektrium\user\widgets\Connect;

$this->title = 'HubSoE | Log Masuk';
$web = Yii::getAlias('@web');

?>
  <style>

.form-group{
margin-bottom:14px;

}

</style>
 <header class="masthead">
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                  <div class="col-lg-4"></div>
                    <div class="col-lg-4">
                        <!-- Mashead text and app badges-->
                         
                        
                        <div class="mb-5 mb-lg-0 text-center text-lg-start">
                        
                        <img src="<?=$web?>/images/logo_umk_hubsoe.png" style="max-width: 100%"/>
                        <br /> <br /> 
                       
                            <h2 class="lh-1 mb-3">Log Masuk</h2>
                        
                            
                            
                            
                                               <?php $form = ActiveForm::begin(['id' => 'login-form', 'enableClientValidation' => false]); ?>
                    <?php 
                    
                    $model->role = 1;
                    
                    echo $form->field($model, 'role')->dropDownList(Common::role(), ['prompt' => 'Select User Category'])->label(false)
                    
                        ?>
                        
                        
                        
                        
                    <?= $form->field($model, 'login')->textInput(['placeholder' => $model->getAttributeLabel('login')])->label(false)
                    ?>
                    <?= $form->field($model, 'password')->passwordInput(['placeholder' => 'Password'])->label(false)
                        ?>
                        
                        
                        
                    <div class="form-group">
                        <?= Html::submitButton('Login', ['class' => 'btn btn-primary btn-block', 'name' => 'submit']) ?>
                    </div>

             

             
                    <?php ActiveForm::end(); ?>
                            
                            
                            
                            
                            
                              
                               
                  
                        </div>
                    </div>
           
                </div>
            </div>
        </header>
