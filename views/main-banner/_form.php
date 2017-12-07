<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MainBanner */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="main-banner-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_banner')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gambar_banner')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->dropDownList([ 'Aktif' => 'Aktif', 'Non-Aktif' => 'Non-Aktif', '' => '', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'judul_banner')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keterangan_banner')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
