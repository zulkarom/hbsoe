<?php

use yii\helpers\Html;
use kartik\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\SectorEntrepreneur */
/* @var $form yii\widgets\ActiveForm */
?>

   <div class="card">
    <div class="card-body">
<div class="sector-entrepreneur-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'entrepreneur_id')->textInput() ?>
    
    <?= $form->field($model, 'sector_id')->textInput() ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
  </div>
    </div>


