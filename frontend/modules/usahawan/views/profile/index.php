<?php

use yii\helpers\Html;
use kartik\widgets\ActiveForm;
use common\models\Common;
use kartik\date\DatePicker;
use backend\models\Institution;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;
use karpoff\icrop\CropImageUpload;
/* @var $this yii\web\View */
/* @var $model backend\models\Fasi */
/* @var $form ActiveForm */

$this->title = "MAKLUMAT PERIBADI";

?>
<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
    
<div class="box">
    <div class="box-header"></div>
    <div class="box-body">
        <div class="profile-index">

            <div class="row">
                <div class="col-md-5"><?= $form->field($model, 'fullname')->textInput(['disabled' => 'disabled', 'value' => $model->user->fullname])->label('Nama Kadet') ?></div>

                <div class="col-md-3">
                <?= $form->field($model, 'email')->textInput(['disabled' => 'disabled', 'value' => $model->user->email]) ?>
                 </div>
            </div>


            <div class="row">
                <div class="col-md-3"><?= $form->field($model, 'age') ?></div>
                <div class="col-md-6"><?= $form->field($model, 'address')->textarea(['rows' => '3'])->label('Alamat Surat Menyurat')?></div>
            </div>

               

                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-striped">
                            <tbody><tr>
                              <th style="width: 500px"><?= $form->field($model, 'profile_file')->widget(CropImageUpload::className())?></th>
                              <th><img src="<?=Url::to(['/usahawan/profile/profile-image', 'id' => Yii::$app->user->identity->usahawan->id])?>" width="80" height="80"></th>
                            </tr>
                          </tbody></table>
                    </div>
                </div>
        </div>
    </div>
</div>

<div class="form-group">
    <?= Html::submitButton('<span class="glyphicon glyphicon-send"></span>  Hantar Maklumat', ['class' => 'btn btn-primary']) ?>
</div>
            
            
      <?php ActiveForm::end(); ?>