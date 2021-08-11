<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\SocialImpact */

$this->title = \Yii::t('app', 'New Social Impact');
$this->params['breadcrumbs'][] = ['label' => \Yii::t('app', 'Social Impact'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="social-impact-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
