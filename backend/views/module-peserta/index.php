<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ModulePesertaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Module Pesertas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="module-peserta-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Module Peserta', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'user_id',
            'anjur_id',
            'status',
            'submitted_at',
            //'paid_at',
            //'is_paid',
            //'payment_method',
            //'user_type',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
