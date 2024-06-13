<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\mercedesmodels $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="mercedesmodels-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nome')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'motor')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'potencia')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'acelaracao')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'preco')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'imageFile')->fileInput() ?>

    <?= $form->field($model, 'ano')->textInput() ?>

    <?= $form->field($model, 'tipo_combustivel')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'consumo')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
