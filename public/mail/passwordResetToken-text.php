<?php

/* @var $this yii\web\View */
/* @var $user app\models\Users */

$resetLink = Yii::$app->urlManager->createAbsoluteUrl(['site/reset-password', 'token' => $user->password_reset_token]);
?>
Olá <?= $user->username ?>,

Siga o link abaixo para redefinir sua senha:

<?= $resetLink ?>

