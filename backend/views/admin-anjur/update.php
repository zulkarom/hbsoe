<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\KursusAnjur */

$this->title = 'Update Admin Anjur: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Admin Anjur', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="admin-anjur-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
