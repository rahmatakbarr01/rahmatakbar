<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Detaipembelian */

$this->title = $model->no_faktur;
$this->params['breadcrumbs'][] = ['label' => 'Detaipembelians', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="detaipembelian-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'no_faktur' => $model->no_faktur], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'no_faktur' => $model->no_faktur], [
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
            'no_faktur',
            'id_barang',
            'jumlah',
        ],
    ]) ?>

</div>
