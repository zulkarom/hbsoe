<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\KursusPeserta */

$this->title = $model->module->module_name;
$this->params['breadcrumbs'][] = ['label' => 'Module Registration', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => 'Admin Anjur', 'url' => ['anjur', 'cid' => $model->module->kategori_id]];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="box">
<div class="box-body">
<div class="module-anjur-view">

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            [
             'label' => 'Nama Modul',
             'value' => function($model){
                return $model->module->module_name;
             }
            ],
            [
             'label' => 'Modul Siri',
             'value' => function($model){
                return $model->module_siri;
             }
            ],
            [
             'label' => 'Tarikh Mula',
             'value' => function($model){
                return date('d F Y', strtotime($model->date_start));
             }
            ],
            [
             'label' => 'Tarikh Tamat',
             'value' => function($model){
                return date('d F Y', strtotime($model->date_end));
             }
            ],
            [
             'label' => 'Kapasiti',
             'value' => function($model){
                return $model->capacity;
             }
            ],
            [
             'label' => 'Lokasi',
             'value' => function($model){
                return $model->location;
             }
            ],
            [
             'label' => 'Admin Anjur Description',
             'value' => function($model){
                return $model->description;
             }
            ],
            [
             'label' => 'Module Description',
             'value' => function($model){
                return $model->module->description;
             }
            ],
            [
             'label' => 'Module Category Description',
             'value' => function($model){
                return $model->module->moduleKategori->description;
             }
            ],
            
        ],
    ]) ?>
    <p>
        <?= Html::a('Daftar Modul', ['anjur-register', 'id' => $model->id], ['class' => 'btn btn-success']) ?>
    </p>

</div>
</div>
</div>