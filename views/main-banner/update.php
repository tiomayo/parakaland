<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\MainBanner */

$this->title = 'Update Main Banner: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Main Banners', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="main-banner-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
