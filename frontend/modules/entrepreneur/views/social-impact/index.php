<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\modules\entrepreneur\models\SocialImpactSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Social Impacts';
$this->title = \Yii::t('app', 'Social Impact');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="social-impact-index">

    <p>
        <?= Html::a(\Yii::t('app', 'New Social Impact'), ['create'], ['class' => 'btn btn-success']) ?>
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

            'socialImpactName',
            'description',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
  </div>
    </div>


</div>
