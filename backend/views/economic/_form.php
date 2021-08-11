<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Economic */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="economic-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'entrepreneur_id')->textInput() ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
