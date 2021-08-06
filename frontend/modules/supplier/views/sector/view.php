<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\SectorSupplier */

$this->title = 'View Sector';
$this->params['breadcrumbs'][] = ['label' => 'Sectors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sector-supplier-view">


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

<br />
   <div class="card">
    <div class="card-body">
     <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'supplierName',
            'sectorName',
            'description:ntext',
            
        ],
    ]) ?>

  </div>
    </div>


</div>
