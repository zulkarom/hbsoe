<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\SocialImpactSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Social Impact Beneficiaries';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="social-impact-index">

     <p>
        <?= Html::a('Create Social Impact Beneficiary', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <br />
     <div class="card">
    <div class="card-body">
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
       // 'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'entrepreneurName',
            'socialImpactName',

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
