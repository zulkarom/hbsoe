<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
use yii\bootstrap4\Modal;

/* @var $this yii\web\View */
/* @var $searchModel bgm\modules\jurulatih\models\ModulePesertaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Module Registration';
$this->params['breadcrumbs'][] = $this->title;
?>

<p>
    <?php echo Html::button('Daftar Modul', ['value' => Url::to(['create']), 'class' => 'btn btn-success', 'id' => 'modalBttnModule']);
    

    $this->registerJs('
    $(function(){
      $("#modalBttnModule").click(function(){
          $("#createModule").modal("show")
            .find("#formCreateModule")
            .load($(this).attr("value"));
      });
    });
    ');


    ?>
</p>

<br/>

<div class="box">
<div class="box-body">
<div class="module-peserta-index">

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        // 'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
             'label' => 'Module',
             'value' => function($model){
                return $model->adminAnjur->module->module_name.' - '.$model->adminAnjur->module_siri;
             }
            ],
            [
             'format' => 'html',
             'label' => 'Status',
             'value' => function($model){
                if($model->status == 10){
                    return '<span class="label label-info">'.$model->statusText.'</span>';
                }else if($model->status == 20){
                    return '<span class="label label-primary">'.$model->statusText.'</span>';
                }else if($model->status == 30){
                    return '<span class="label label-success">'.$model->statusText.'</span>';
                }else{
                    return '<span class="label label-danger">'.$model->statusText.'</span>';
                }
             }
            ],
            'submitted_at:datetime',

            ['class' => 'yii\grid\ActionColumn',
                'contentOptions' => ['style' => 'width: 18%'],
                'template' => '{view}',
                //'visible' => false,
                'buttons'=>[
                'view'=>function ($url, $model) {
                    return Html::a('<span class="fa fa-eye"></span> View',['view', 'id' => $model->id],['class'=>'btn btn-primary btn-sm']);
                }
                ],
                
                ],
        ],
    ]); ?>
</div>
