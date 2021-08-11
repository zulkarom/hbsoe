<?php

use yii\helpers\Html;
use kartik\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $form ActiveForm */

$this->title = \Yii::t('app', 'Location');
$this->params['breadcrumbs'][] = $this->title;

$model->u_longitude = $model->longitude; 
$model->u_latitude = $model->latitude;
$model->u_location = $model->location;
?>



<div class="row">
    <div class="col-12">
        <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
            
        <div class="card">
            <div class="card-body">
                <div class="profile-index">

                 
                        <div class="row">
                            <div class="col-9">
                                <?= $form->field($model, 'u_location')->widget(\kalyabin\maplocation\SelectMapLocationWidget::className(), [
                                'attributeLatitude' => 'u_latitude',
                                'attributeLongitude' => 'u_longitude',
                                'googleMapApiKey' => 'AIzaSyCdaIFmGh8LWEfbXln7BkPnMfB1RDd9Rj4',
                                'draggable' => true,
                            ])->label('Location');?>
                            </div>
                        </div>
                </div>
            </div>
        </div>
        <br/>
        <div class="form-group">
            <?= Html::submitButton('<span class="glyphicon glyphicon-send"></span> '\Yii::t('app', 'Save'), ['class' => 'btn btn-primary']) ?>
        </div>
            
        <?php ActiveForm::end(); ?>
    </div>
</div>