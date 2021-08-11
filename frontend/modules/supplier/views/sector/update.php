<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\SectorSupplier */

$this->title = \Yii::t('app', 'Update Sector');
$this->params['breadcrumbs'][] = ['label' => 'Sector Suppliers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="sector-supplier-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
