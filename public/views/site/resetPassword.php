<?php
use yii\helpers\Html;
use yii\bootstrap5\ActiveForm;

$this->title = 'Redefinir Senha';
$this->params['breadcrumbs'][] = $this->title;
$css = <<< CSS
body {
    background-color: #d0d0d0;
}
CSS;

$this->registerCss($css);
?>
<div class="site-reset-password">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Por favor, escolha sua nova senha:</p>

    <?php $form = ActiveForm::begin(['id' => 'reset-password-form']); ?>

        <?= $form->field($model, 'password')->passwordInput(['autofocus' => true]) ?>

        <div class="form-group">
            <?= Html::submitButton('Salvar', ['class' => 'btn btn-primary']) ?>
        </div>

    <?php ActiveForm::end(); ?>
</div>

