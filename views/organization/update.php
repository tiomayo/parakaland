<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Organization */

$this->title = 'Update Organization: ' . $model->id_organization;
$this->params['breadcrumbs'][] = ['label' => 'Organizations', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_organization, 'url' => ['view', 'id' => $model->id_organization]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="organization-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
