<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Agency */

$this->title = \Yii::t('app', 'Update Agency');
$this->params['breadcrumbs'][] = ['label' => \Yii::t('app', 'Agencies'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="agency-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
