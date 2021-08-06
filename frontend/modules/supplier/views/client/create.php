<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\EntrepreneurSupplier */

$this->title = 'Create Entrepreneur Supplier';
$this->params['breadcrumbs'][] = ['label' => 'Entrepreneur Suppliers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="entrepreneur-supplier-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
