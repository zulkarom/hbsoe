<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\models\AdminAnjur;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;
use yii\jui\JuiAsset;
/* @var $this yii\web\View */
/* @var $model backend\models\modulePeserta */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="module-peserta-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-md-10">
        <?= $form->field($model, 'anjur_id')->label('Module Anjur')->dropDownList(
            ArrayHelper::map(AdminAnjur::find()
                ->all(),'id', function($model){
                            return $model->module->module_name.' - '.$model['module_siri']; }
                ), ['class'=>'form-control module-select', 'prompt' => 'Pilih Module'] 
        ) ?>
        </div>
    </div>
    <div id="group-medium" style="display:none">
    <div class="row">
        <div class="col-md-2">
            <b>Date Start:</b>
        </div>
        <div class="col-md-8">
            <span id="date-start"></span>
        </div>
    </div>
    <div class="row">
        <div class="col-md-2">
            <b>Date End:</b>
        </div>
        <div class="col-md-8">
            <span id="date-end"></span>
        </div>
    </div>
    <div class="row">
        <div class="col-md-2">
            <b>Capacity:</b>
        </div>
        <div class="col-md-8">
            <span id="capacity"></span>
        </div>
    </div>
    <div class="row">
        <div class="col-md-2">
            <b>Location:</b>
        </div>
        <div class="col-md-8">
            <span id="location"></span>
        </div>
    </div>
    </div>
    <br/>
    <div class="form-group">
        <?= Html::submitButton('Submit Module', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php

$js = <<<'EOD'

$( ".module-select" ).change(function() {
    
    getTargetId($(this));

    var val = $(this).val();
    if(val == ''){
        $("#group-medium").slideUp();
    }else{
        $("#group-medium").slideDown();
    }

});


EOD;
$this->registerJs($js);

$js = "function getTargetId(element){

    var val = element.val();

      $.ajax({url: '".Url::to(['/entrepreneur/module-peserta/get-details', 'id' => ''])."' + val , success: function(result){
        var str = '';
        console.log(result);
        if(result){
            var data = JSON.parse(result);
            $('#date-start').text(data.date_start);
            $('#date-end').text(data.date_end);
            $('#capacity').text(data.capacity);
            $('#location').text(data.location);
        }

    }
    });

}


";
$this->registerJs($js);
?>

