<?php

use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use backend\models\Sector;
use kartik\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\SectorSupplier */
/* @var $form yii\widgets\ActiveForm */
?>
   <div class="card">
    <div class="card-body">
<div class="sector-supplier-form">

    <?php $form = ActiveForm::begin(); ?>

<?= $form->field($model, 'sector_id')->dropDownList(ArrayHelper::map(Sector::find()->all(), 'id', 'sector_name'), ['prompt' => 'Select']) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>


    <div class="form-group">
        <?= Html::submitButton(\Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

  </div>
    </div>

