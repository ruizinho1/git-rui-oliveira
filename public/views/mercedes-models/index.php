<?php

use app\models\mercedesmodels;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\mercedesSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = Yii::t('app', 'Mercedesmodels');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mercedesmodels-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create Mercedesmodels'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nome',
            'motor',
            'potencia',
            'acelaracao',
            //'preco',
            //'image',
            //'ano',
            //'tipo_combustivel',
            //'consumo',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, mercedesmodels $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
