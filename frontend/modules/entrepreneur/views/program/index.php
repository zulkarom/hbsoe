<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ProgramSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Programs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="program-index">

    <p>
        <?= Html::a('Create Program', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <br/>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'prog_name',
            [
             'label' => 'Program Anjuran',
             'value' => function($model){
                return $model->anjuranText;
             }
            ],
            [
             'label' => 'Date Program',
             'value' => function($model){
                return date('d M Y', strtotime($model->prog_date));
             }
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
