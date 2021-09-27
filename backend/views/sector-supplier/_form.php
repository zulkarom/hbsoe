<?php

use yii\helpers\Html;
use kartik\widgets\ActiveForm;
use backend\models\Sector;
use backend\models\Supplier;
use yii\helpers\ArrayHelper;
use kartik\select2\Select2;
/* @var $this yii\web\View */
/* @var $model backend\models\SectorSupplier */
/* @var $form yii\widgets\ActiveForm */
?>

   <div class="card">
    <div class="card-body">

<div class="sector-supplier-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'supplier_id')->widget(Select2::classname(), [
        'data' =>  ArrayHelper::map(Supplier::find()->joinWith('user')->all(),'id', 'user.fullname'),
        'options' => ['placeholder' => $model->supplier_id],
        'disabled' => 'disabled',
        'pluginOptions' => [
            'allowClear' => true
        ],
        ]);
    ?>
    
    <?= $form->field($model, 'sector_id')->dropDownList(ArrayHelper::map(Sector::find()->all(), 'id', 'sector_name'), ['prompt' => 'Select']) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
  </div>
    </div>


