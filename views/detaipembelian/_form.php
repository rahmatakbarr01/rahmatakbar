<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Detaipembelian */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="detaipembelian-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_faktur')->textInput() ?>

    <?= $form->field($model, 'id_barang')->textInput() ?>

    <?= $form->field($model, 'jumlah')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
