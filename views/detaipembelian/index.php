<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use app\models\Detaipembelian;

/* @var $this yii\web\View */
/* @var $searchModel app\models\Detaipembeliansearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Detaipembelians';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detaipembelian-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Detaipembelian', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_faktur',
            'barang.nama',
            //'id_barang',
            'jumlah',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Detaipembelian $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_faktur' => $model->no_faktur]);
                 }
            ],
        ],
    ]); ?>


</div>
