<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\mercedesSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="mercedesmodels-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'nome') ?>

    <?= $form->field($model, 'motor') ?>

    <?= $form->field($model, 'potencia') ?>

    <?= $form->field($model, 'acelaracao') ?>

    <?php // echo $form->field($model, 'preco') ?>

    <?php // echo $form->field($model, 'image') ?>

    <?php // echo $form->field($model, 'ano') ?>

    <?php // echo $form->field($model, 'tipo_combustivel') ?>

    <?php // echo $form->field($model, 'consumo') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
