<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\SectorEntrepreneur */

$this->title = 'Update Sector Entrepreneur: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Sector Entrepreneurs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="sector-entrepreneur-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
