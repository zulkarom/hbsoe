<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Competency */

$this->title = \Yii::t('app', 'Update Competency');
$this->params['breadcrumbs'][] = ['label' => \Yii::t('app', 'Competencies'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="competency-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
