<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\SocialImpact */

$this->title = 'Update Social Impact: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Social Impacts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="social-impact-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
