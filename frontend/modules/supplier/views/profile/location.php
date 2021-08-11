<?php

use yii\helpers\Html;
use kartik\widgets\ActiveForm;
/* @var $this yii\web\View */
/* @var $form ActiveForm */

$this->title = \Yii::t('app', 'Location');
$this->params['breadcrumbs'][] = $this->title;

$model->s_longitude = $model->longitude; 
$model->s_latitude = $model->latitude;
$model->s_location = $model->location;
?>

<div class="card">
            <div class="card-body">
 <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
                        <div class="row">
                            <div class="col-9">
                                <?= $form->field($model, 's_location')->widget(\kalyabin\maplocation\SelectMapLocationWidget::className(), [
                                'attributeLatitude' => 's_latitude',
                                'attributeLongitude' => 's_longitude',
                                'googleMapApiKey' => 'AIzaSyCdaIFmGh8LWEfbXln7BkPnMfB1RDd9Rj4',
                                'draggable' => true,
                            ])->label(\Yii::t('app', 'Location'));?>
                            </div>
                        </div>

        <br/>
        <div class="form-group">
            <?= Html::submitButton(\Yii::t('app', 'Save'), ['class' => 'btn btn-primary']) ?>
        </div>
            
        <?php ActiveForm::end(); ?>
    </div>
</div>
