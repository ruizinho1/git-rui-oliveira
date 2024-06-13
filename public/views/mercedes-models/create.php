<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\mercedesmodels $model */

$this->title = Yii::t('app', 'Create Mercedesmodels');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Mercedesmodels'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mercedesmodels-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
