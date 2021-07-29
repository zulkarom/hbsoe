<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Users */

$this->title = 'Update Supplier: ' . $model->fullname;
$this->params['breadcrumbs'][] = ['label' => 'Supplier', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->fullname, 'url' => ['view', 'id' => $supplier->id]];
$this->params['breadcrumbs'][] = 'Update';
?>


<div class="white_card card_height_100 mb_30">
<div class="white_card_header"><div class="users-update">



<div class="users-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'email')->textInput() ?>
    
    <?= $form->field($model, 'fullname')->textInput() ?>
    
    
     <?= $form->field($model, 'rawPassword')->passwordInput(['maxlength' => true])->label('Reset Password (leave blank if no change)') ?>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

</div></div>
</div>
