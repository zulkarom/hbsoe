<?php

use yii\helpers\Html;
use kartik\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use kartik\select2\Select2;
use yii\helpers\Url;
use karpoff\icrop\CropImageUpload;
use backend\models\Daerah;
use backend\models\Negeri;
/* @var $this yii\web\View */
/* @var $form ActiveForm */

$this->title = \Yii::t('app', 'My Profile');
$this->params['breadcrumbs'][] = $this->title;

$model->u_longitude = $model->longitude; 
$model->u_latitude = $model->latitude;
$model->u_location = $model->location;
?>



<div class="row">
    <div class="col-12">
        <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
            
        <div class="card">
            <div class="card-body">
                <div class="profile-index">

                    <div class="row">
                        <div class="col-md-5"><?= $form->field($model, 'fullname')->textInput(['disabled' => 'disabled', 'value' => $model->user->fullname]) ?></div>

                        <div class="col-md-3">
                        <?= $form->field($model, 'email')->textInput(['disabled' => 'disabled', 'value' => $model->user->email]) ?>
                         </div>

                        <div class="col-md-1"><?= $form->field($model, 'age') ?></div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-5"><?= $form->field($model, 'biz_name')->textInput() ?></div>
 <div class="col-md-3"><?= $form->field($model, 'phone') ?></div>
             
                    </div>


                    <div class="row">
                        <div class="col-md-9"><?= $form->field($model, 'address')->textarea(['rows' => '3'])->label('Alamat Surat Menyurat')?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3">
                            <?= $form->field($model, 'postcode')->textInput(['maxlength' => true]) ?>
                        </div>
                        <div class="col-3">
                            <?= $form->field($model, 'city')->widget(Select2::classname(), [
                            'data' =>  ArrayHelper::map(Daerah::find()->all(),'id', 'daerah_name'),
                            'options' => ['placeholder' => 'Select...'],
                            'pluginOptions' => [
                                'allowClear' => true
                            ],
                            ]);?>
                        </div>
                        <div class="col-3">
                            <?= $form->field($model, 'state')->widget(Select2::classname(), [
                            'data' =>  ArrayHelper::map(Negeri::find()->all(),'id', 'negeri_name'),
                            'options' => ['placeholder' => 'Select...'],
                            'pluginOptions' => [
                                'allowClear' => true
                            ],
                            ]);?>
                        </div>
                    </div>

                       

                        <div class="row">
                            <div class="col-md-12">
                                <table class="table">
                                    <tbody><tr>
                                      <th style="width: 1060px"><?= $form->field($model, 'profile_file')->widget(CropImageUpload::className())?></th>
                                      <th><img src="<?=Url::to(['/entrepreneur/profile/profile-image', 'id' => Yii::$app->user->identity->entrepreneur->id])?>" width="90" height="90"></th>
                                    </tr>
                                  </tbody></table>
                            </div>
                        </div>
          
                </div>
            </div>
        </div>
        <br/>
        <div class="form-group">
            <?= Html::submitButton('<span class="glyphicon glyphicon-send"></span> ' . \Yii::t('app', 'Save Information'), ['class' => 'btn btn-primary']) ?>
        </div>
            
        <?php ActiveForm::end(); ?>
    </div>
</div>