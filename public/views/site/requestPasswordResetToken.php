<?php
use yii\helpers\Html;
use yii\bootstrap5\ActiveForm;

$this->title = 'Solicitar redefinição de senha';
$this->params['breadcrumbs'][] = $this->title;

$css = <<< CSS
body {
    background-color: #d0d0d0;
}
CSS;

$this->registerCss($css);

?>
<div class="site-request-password-reset">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Por favor, preencha seu e-mail. Um link para redefinir a senha será enviado para lá.</p>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'request-password-reset-form']); ?>

                <?= $form->field($model, 'email')->textInput(['autofocus' => true]) ?>

                <div class="form-group">
                    <?= Html::submitButton('Enviar', ['class' => 'btn btn-primary']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
