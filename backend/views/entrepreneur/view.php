<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Entrepreneur */

$this->title = $model->user->fullname;
$this->params['breadcrumbs'][] = ['label' => 'Entrepreneur', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="white_card card_height_100 mb_30">
<div class="white_card_header">
<div class="entrepreneur-view">
    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
    <br/>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            [
                'label' => 'Nama',
                'value' => function($model){
                    return $model->user->fullname;
                }
            ],
            [
                'label' => 'Email',
                'value' => function($model){
                    return $model->user->email;
                }
            ],
            [
                'label' => 'Umur',
                'value' => function($model){
                    return $model->age;
                }
            ],
            [
             'format' => 'html',
             'label' => 'Alamat',
             'value' => function($model){
                if($model->address){
                    return $model->address.'<br/>'.$model->postcode.', '.$model->city.', '.$model->state;
                }
             }
            ],            
            [
                'label' => 'Lokasi',
                'value' => function($model){
                    return $model->location;
                }
            ],
            [
                'format' => 'raw',
                'label' => 'Gambar Profile',
                'value' => function($model){
                    if($model->profile_file){
                        return Html::a(' Download <span class="glyphicon glyphicon-download-alt"></span>', ['profile-image', 'id' => $model->id], [
                                   'target' => '_blank']);
                    }
                }
            ],
        ],
    ]) ?>

</div>
</div>
</div>
