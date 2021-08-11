<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Agency */

$this->title = \Yii::t('app', 'New Agency');
$this->params['breadcrumbs'][] = ['label' => \Yii::t('app', 'Agencies'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="agency-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
