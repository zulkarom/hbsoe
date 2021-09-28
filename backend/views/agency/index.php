<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\AgencySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Agencies';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="agency-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <div class="card">
    <div class="card-body">
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
       // 'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'entrepreneurName',
            'nama_agensi',
            [
             'label' => \Yii::t('app', 'Date Accept'),
             'value' => function($model){
                return date('d F Y', strtotime($model->tarikh_terima));;
             }
            ],

            ['class' => 'yii\grid\ActionColumn',
            //     'contentOptions' => ['style' => 'width: 13%'],
                'template' => '{view} {delete}',
                //'visible' => false,
                'buttons'=>[
                    'delete'=>function ($url, $model) {
                    return Html::a('<span class="fa fa-trash"></span> '.\Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
                        'class' => 'btn btn-danger btn-sm',
                        'data' => [
                            'confirm' => 'Are you sure you want to remove this item?',
                            'method' => 'post',
                        ],
                    ]);
                    },
                    'view'=>function ($url, $model) {
                        return Html::a('<span class="fa fa-search"></span> '.\Yii::t('app', 'View'), ['view', 'id' => $model->id], [
                            'class' => 'btn btn-primary btn-sm',
  
                        ]);
                    }
                ],
            
            ],
        ],
    ]); ?>
  </div>
    </div>


</div>
