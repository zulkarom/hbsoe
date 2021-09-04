<?php

use yii\helpers\Html;
use kartik\widgets\ActiveForm;

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
    <?php
    if($model->prog_category == 1){
            $show = '';
        }else{
            $show = 'style="display:none"';
        }
    ?> 
    <div class="row">
        <div class="col-5">
            <?= $form->field($model, 'prog_category')->textInput() ?>
        </div>
        <div class="col-5">
            <div id="group-medium" <?=$show?>>
                <?= $form->field($model, 'prog_other')->textInput(['maxlength' => true])->label(\Yii::t('app', 'Please State'))?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-10">
            <?= $form->field($model, 'prog_description')->textarea(['rows' => 2]) ?>
        </div>
    </div>
    <div class="row">
        <div class="col-5">
            <?= $form->field($model, 'prog_category')->textInput() ?>
        </div>
        <div class="col-5">
            <div id="group-medium" <?=$show?>>
                <?= $form->field($model, 'prog_other')->textInput(['maxlength' => true])->label(\Yii::t('app', 'Please State'))?>
            </div>
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
        <div class="col-5">
            <?= $form->field($model, 'prog_anjuran')->textInput() ?>
        </div>
        <div class="col-5">
            <div id="group-medium2" <?=$show?>>
                <?= $form->field($model, 'anjuran_other')->textInput(['maxlength' => true])->label(\Yii::t('app', 'Please State'))?>
            </div>
        </div>
    </div>

    <div class="form-group">
        <?= Html::submitButton('Save Program', ['class' => 'btn btn-success']) ?>
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
    if(val == 1){
        $("#group-medium2").slideDown();
    }else{
        $("#group-medium2").slideUp();
    }
});

');
?>