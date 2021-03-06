<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Competency */

$this->title = \Yii::t('app', 'View Competency');
$this->params['breadcrumbs'][] = ['label' => \Yii::t('app', 'Competencies'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="competency-view">


    <p>
        <?= Html::a(\Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(\Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
<br />

   <div class="card">
    <div class="card-body">
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'entrepreneurName',
            [
             'label' => \Yii::t('app', 'Competency'),
             'value' => function($model){
                return $model->category->category_name;
             }
            ],
            'description',
        ],
    ]) ?>

  </div>
    </div>


</div>
