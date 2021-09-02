<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\SectorEntrepreneur */

$this->title = $model->entrepreneurName;
$this->params['breadcrumbs'][] = ['label' => 'Sector Beneficiaries', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="sector-entrepreneur-view">
    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
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
            'entrepreneurName',
            'description:ntext',
            'sector_id',
        ],
    ]) ?>

</div>
