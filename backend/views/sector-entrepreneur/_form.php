<?php

use yii\helpers\Html;
use kartik\widgets\ActiveForm;
use backend\models\Sector;
use backend\models\Entrepreneur;
use yii\helpers\ArrayHelper;
use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $model backend\models\SectorEntrepreneur */
/* @var $form yii\widgets\ActiveForm */
?>

   <div class="card">
    <div class="card-body">
<div class="sector-entrepreneur-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'entrepreneur_id')->widget(Select2::classname(), [
        'data' =>  ArrayHelper::map(Entrepreneur::find()->joinWith('user')->all(),'id', 'user.fullname'),
        'options' => ['placeholder' => $model->entrepreneur_id],
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


