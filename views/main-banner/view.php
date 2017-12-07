<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\MainBanner */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Main Banners', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="main-banner-view">

    <h1><?= Html::encode($this->title) ?></h1>

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

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'nama_banner',
            'gambar_banner',
            'status',
            'judul_banner',
            'keterangan_banner',
        ],
    ]) ?>

</div>
