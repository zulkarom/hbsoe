<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\modules\entrepreneur\models\CompetencySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Competencies';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="competency-index">


    <p>
        <?= Html::a('New Competency', ['create'], ['class' => 'btn btn-success']) ?>
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

          //  'id',
           // 'entrepreneur_id',
            'description',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
  </div>
    </div>



</div>