<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\UsahawanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Supplier';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="white_card card_height_100 mb_30">
<div class="white_card_header">
<div class="usahawan-index">

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'label' => 'Nama',
                'attribute' => 'name',
                'value' => function($model){
                    return $model->user->fullname;
                }
            ],
            [
                'label' => 'Email',
                'attribute' => 'email',
                'value' => function($model){
                    return $model->user->email;
                }
            ],
            [
             'label' => 'Daftar Pada',
             'value' => function($model){
                if($model->user){
                    return date('d M Y', $model->user->created_at);
                }
             }
            ],

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