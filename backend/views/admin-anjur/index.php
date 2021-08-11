<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\AdminAnjurSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Admin Anjurs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="admin-anjur-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Admin Anjur', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'module_siri',
            'date_start',
            'date_end',
            'capacity',
            //'location',
            //'module_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
