<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\modules\entrepreneur\models\AgencySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = \Yii::t('app', 'Agencies');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="agency-index">

    <p>
        <?= Html::a(\Yii::t('app', 'New Agency'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<br />

    <div class="card">
    <div class="card-body">
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
       // 'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

          //  'id',
           // 'entrepreneur_id',
            'description',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
  </div>
    </div>


</div>
