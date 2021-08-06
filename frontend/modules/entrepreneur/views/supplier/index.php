<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\EntrepreneurSupplierSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = \Yii::t('app', 'My Suppliers');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="entrepreneur-supplier-index">

<p>
        <?= Html::a(\Yii::t('app', 'Search Supplier'), ['search'], ['class' => 'btn btn-success']) ?>
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

            'supplier.biz_name',
            [
                'label' => 'Location',
                'value' => function($model){
                return $model->supplier->cityModel->daerah_name . ', ' . $model->supplier->stateModel->negeri_name;
                
                }
                
            ],

            ['class' => 'yii\grid\ActionColumn',
            //     'contentOptions' => ['style' => 'width: 13%'],
                'template' => '{view} {delete}',
                //'visible' => false,
                'buttons'=>[
                    'delete'=>function ($url, $model) {
                    return Html::a('<span class="fa fa-trash"></span> Remove', ['delete', 'id' => $model->id], [
                        'class' => 'btn btn-danger btn-sm',
                        'data' => [
                            'confirm' => 'Are you sure you want to remove this supplier?',
                            'method' => 'post',
                        ],
                    ]);
                    },
                    'view'=>function ($url, $model) {
                        return Html::a('<span class="fa fa-search"></span> View', ['view', 'id' => $model->supplier->id], [
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
