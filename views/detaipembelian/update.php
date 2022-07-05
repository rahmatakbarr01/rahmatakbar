<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Detaipembelian */

$this->title = 'Update Detaipembelian: ' . $model->no_faktur;
$this->params['breadcrumbs'][] = ['label' => 'Detaipembelians', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_faktur, 'url' => ['view', 'no_faktur' => $model->no_faktur]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="detaipembelian-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
