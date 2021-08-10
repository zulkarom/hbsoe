<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Competency */

$this->title = \Yii::t('app', 'New Competency');
$this->params['breadcrumbs'][] = ['label' => \Yii::t('app', 'Competencies'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="competency-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
