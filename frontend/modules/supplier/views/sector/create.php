<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\SectorSupplier */

$this->title = \Yii::t('app', 'New Sector');
$this->params['breadcrumbs'][] = ['label' => 'Sector Suppliers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sector-supplier-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
