<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\SocialImpact */

$this->title = \Yii::t('app', 'Update Social Impact');
$this->params['breadcrumbs'][] = ['label' => \Yii::t('app', 'Social Impact'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="social-impact-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
