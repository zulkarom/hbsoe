<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\ModulePeserta */

$this->title = 'Update Module Registration ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Module Registration', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="mursus-peserta-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
