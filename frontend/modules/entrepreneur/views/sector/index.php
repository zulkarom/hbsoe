<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\modules\entrepreneur\models\SectorSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = \Yii::t('app', 'My Sector');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sector-entrepreneur-index">


    <p>
        <?= Html::a(\Yii::t('app', 'New Sector'), ['create'], ['class' => 'btn btn-success']) ?>
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
            'descriptionx:ntext',
            

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
  </div>
    </div>



</div>
