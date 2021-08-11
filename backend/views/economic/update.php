<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Economic */

$this->title = 'Update Economic: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Economics', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="economic-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
