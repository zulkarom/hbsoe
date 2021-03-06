<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Program */

$this->title = $model->prog_name;
$this->params['breadcrumbs'][] = ['label' => 'Programs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);

?>
<div class="program-view">
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

    <br/>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'prog_name',
            [
             'label' => \Yii::t('app', 'Category'),
             'value' => function($model){
                return $model->progCategory->category_name;
             }
            ],
            'prog_other',
            [
             'label' => \Yii::t('app', 'Program Date'),
             'value' => function($model){
                return date('d M Y', strtotime($model->prog_date));
             }
            ],
            'prog_description:ntext',
            [
             'label' => \Yii::t('app', 'Organize'),
             'value' => function($model){
                return $model->anjuranText;
             }
            ],
            'anjuran_other',
        ],
    ]) ?>

</div>
