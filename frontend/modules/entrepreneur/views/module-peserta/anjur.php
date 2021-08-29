<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
use yii\bootstrap\Modal;

/* @var $this yii\web\View */
/* @var $searchModel bgm\modules\jurulatih\models\KursusPesertaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Admin Anjur';
$this->params['breadcrumbs'][] = ['label' => 'Module Registration', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="box">
<div class="box-body">
<div class="module-anjur-index">

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        // 'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
             'label' => 'Nama Kursus',
             'value' => function($model){
                return $model->module->module_name;
             }
            ],
            [
             'label' => 'Kursus Siri',
             'value' => function($model){
                return $model->module_siri;
             }
            ],
            [
             'label' => 'Tarikh Mula',
             'value' => function($model){
                return date('d F Y', strtotime($model->date_start));
             }
            ],
            [
             'label' => 'Tarikh Tamat',
             'value' => function($model){
                return date('d F Y', strtotime($model->date_end));
             }
            ],
            [
             'label' => 'Kapasiti',
             'value' => function($model){
                return $model->capacity;
             }
            ],
            [
             'label' => 'Lokasi',
             'value' => function($model){
                return $model->location;
             }
            ],
            ['class' => 'yii\grid\ActionColumn',
                'contentOptions' => ['style' => 'width: 18%'],
                'template' => '{view}',
                //'visible' => false,
                'buttons'=>[
                'view'=>function ($url, $model) {
                    return Html::a('<span class="fa fa-eye"></span> View',['anjur-view', 'id' => $model->id],['class'=>'btn btn-primary btn-sm']);
                }
                ],
                
                ],
        ],
    ]); ?>
</div>
