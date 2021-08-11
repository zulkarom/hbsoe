<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\EconomicSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Economics';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="economic-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

     <div class="card">
    <div class="card-body">
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'entrepreneurName',
            'description',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

  </div>
    </div>


</div>
