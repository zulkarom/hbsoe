<?php

use yii\helpers\Html;
use kartik\widgets\ActiveForm;
use kartik\date\DatePicker;
use common\models\Common;
use yii\helpers\ArrayHelper;
use backend\models\ProgramCategory;
/* @var $this yii\web\View */
/* @var $model backend\models\Program */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="card">
<div class="card-body">
<div class="program-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-8">
            <?= $form->field($model, 'prog_name')->textInput(['maxlength' => true]) ?>
        </div>
    </div>

    <?php
    if($model->prog_category == 1){
            $show = '';
        }else{
            $show = 'style="display:none"';
        }
    ?> 

    <div class="row">
        <div class="col-6">
            <?= $form->field($model, 'prog_category')->dropDownList(
            ArrayHelper::map(ProgramCategory::find()->orderBy("id DESC")->all(),'id', 'category_name'), ['class'=>'form-control category', 'prompt' => 'Select' ]
        )?>
        </div>
        <div class="col-2">
            <?=$form->field($model, 'prog_date')->widget(DatePicker::classname(), [
                'removeButton' => false,
                'pluginOptions' => [
                    'autoclose'=>true,
                    'format' => 'yyyy-mm-dd',
                    'todayHighlight' => true,
                    
                ],
                
                
            ]);
            ?>
        </div>
    </div>

    <div class="row">
        <div class="col-8">
            <div id="group-medium" <?=$show?>>
                <?= $form->field($model, 'prog_other')->textInput(['maxlength' => true])->label(\Yii::t('app', 'Please State'))?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-8">
            <?= $form->field($model, 'prog_description')->textarea(['rows' => 2]) ?>
        </div>
    </div>

    <?php
    if($model->prog_anjuran == 2){
            $show = '';
        }else{
            $show = 'style="display:none"';
        }
    ?> 
    <div class="row">
        <div class="col-8">
            <?= $form->field($model, 'prog_anjuran')->dropDownList(
                    Common::anjuran(), ['prompt' => 'Pilih Anjuran',  'class' => 'form-control anjuran']) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-8">
            <div id="group-medium2" <?=$show?>>
                <?= $form->field($model, 'anjuran_other')->textInput()->label(\Yii::t('app', 'Please State')) ?>
            </div>
        </div>
    </div>

    <div class="form-group">
        <?= Html::submitButton(\Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
</div>
</div>
<?php 
$this->registerJs('

$(".category").change(function(){
    var val = $(this).val();
    if(val == 1){
        $("#group-medium").slideDown();
    }else{
        $("#group-medium").slideUp();
    }
});

$(".anjuran").change(function(){
    var val = $(this).val();
    if(val == 2){
        $("#group-medium2").slideDown();
    }else{
        $("#group-medium2").slideUp();
    }
});

');
?>