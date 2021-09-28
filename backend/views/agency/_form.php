<?php

use yii\helpers\Html;
use kartik\widgets\ActiveForm;
use kartik\date\DatePicker;
/* @var $this yii\web\View */
/* @var $model backend\models\Competency */
/* @var $form yii\widgets\ActiveForm */
?>

   <div class="card">
    <div class="card-body">
<div class="competency-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_agensi')->textInput() ?>

    <?=$form->field($model, 'tarikh_terima')->widget(DatePicker::classname(), [
        'removeButton' => false,
        'pluginOptions' => [
            'autoclose'=>true,
            'format' => 'yyyy-mm-dd',
            'todayHighlight' => true,
        ],
    ]);
    ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 3]) ?>

    <div class="form-group">
        <?= Html::submitButton(\Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

  </div>
    </div>


