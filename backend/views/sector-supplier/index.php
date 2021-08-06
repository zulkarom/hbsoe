<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\SectorSupplierSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Sector Suppliers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sector-supplier-index">


    <p>
        <?php // Html::a('Create Sector Supplier', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<br />
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>


   <div class="card">
    <div class="card-body">
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
       // 'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'sectorName',
            'supplierName',
            'descriptionx:ntext',
            

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


  </div>
    </div>



</div>
