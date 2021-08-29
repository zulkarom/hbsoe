<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\models\AdminAnjur;
use backend\models\ModuleKategori;
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
        <?= $form->field($model, 'kategori')->dropDownList(
            ArrayHelper::map(ModuleKategori::find()->all(),'id', 'kategori_name'), ['class'=>'form-control module-select', 'prompt' => 'Pilih Kategori' ]
        )->label('Modul Kategori')?>
        </div>
    </div>

    <br/>
    <div class="form-group">
        <?= Html::submitButton('Lihat Modul', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>