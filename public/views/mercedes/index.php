<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Mercedes Models';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mercedes-index">
    <h1><?= Html::encode($this->title) ?></h1>

    <p><?= Html::a('Create Mercedes Model', ['create'], ['class' => 'btn btn-success']) ?></p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'nome',
            'motor',
            'potencia',
            'acelaracao',
            'preco',
            'image',
            'ano',
            'tipo_combustivel',
            'consumo',
            // Other columns
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>