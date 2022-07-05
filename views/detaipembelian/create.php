<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Detaipembelian */

$this->title = 'Create Detaipembelian';
$this->params['breadcrumbs'][] = ['label' => 'Detaipembelians', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detaipembelian-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
