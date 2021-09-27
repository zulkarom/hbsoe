<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\SectorEntrepreneurSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Sector Beneficiaries';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sector-entrepreneur-index">

    <p>
        <?php // Html::a('Create Sector Entrepreneur', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
      <br />
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

   <div class="card">
    <div class="card-body">


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'sectorName',
            'entrepreneurName',
            'descriptionx:ntext',
            

            ['class' => 'yii\grid\ActionColumn',
                'template' => '{view} {delete}',
                //'visible' => false,
                'buttons'=>[
                'view'=>function ($url, $model) {
                    return Html::a('<span class="fa fa-search"></span> View',['view', 'id' => $model->id],['class'=>'btn btn-primary btn-sm']);
                },
                'delete'=>function ($url, $model) {
                    return Html::a('<span class="fa fa-trash"></span>',['delete', 'id' => $model->id],['class'=>'btn btn-danger btn-sm', 'data' => [
                    'confirm' => 'Are you sure to delete this data?'
                    ],
                    ]);
                }
                ],
        
            ],
        ],
    ]); ?>

  </div>
    </div>



</div>
