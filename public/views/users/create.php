<?php
use yii\helpers\Html;
use yii\bootstrap5\ActiveForm;

$this->title = 'Create User';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="users-create">
    <h1><?= Html::encode($this->title) ?></h1>

    <div class="users-form">

    <?php $form = ActiveForm::begin([
            'action' => ['users/create'], // Ensure the correct action is specified
        ]); ?>

        <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'status')->hiddenInput(['value' => $model::STATUS_ACTIVE])->label(false) ?>

        <div class="form-group">
            <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>

</div>

