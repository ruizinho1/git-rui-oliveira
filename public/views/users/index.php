<?php

use app\models\Users;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\ActiveForm;
use yii\web\JsExpression;

/** @var yii\web\View $this */
/** @var app\models\UsersSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = Yii::t('app', 'Users');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="users-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('<span class="glyphicon glyphicon-plus"></span> ' . Yii::t('app', 'Create User'), ['users/create'], ['class' => 'btn btn-success']) ?>
    </p>

    <div class="table-container">
        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],
                'id',
                'username',
                'email:email',
                'status',
                [
                    'class' => ActionColumn::className(),
                    'template' => '{view} {update} {delete}',
                    'buttons' => [
                        'view' => function ($url, $model, $key) {
                            return Html::a('<span class="glyphicon glyphicon-eye-open"></span>', $url, ['title' => 'View', 'class' => 'btn btn-primary btn-sm']);
                        },
                        'update' => function ($url, $model, $key) {
                            return Html::a('<span class="glyphicon glyphicon-pencil"></span>', $url, ['title' => 'Update', 'class' => 'btn btn-warning btn-sm']);
                        },
                        'delete' => function ($url, $model, $key) {
                            return Html::a('<span class="glyphicon glyphicon-trash"></span>', $url, [
                                'title' => 'Delete',
                                'class' => 'btn btn-danger btn-sm',
                                'data' => [
                                    'confirm' => 'Are you sure you want to delete this user?',
                                    'method' => 'post',
                                ],
                            ]);
                        },
                    ],
                    'urlCreator' => function ($action, Users $model, $key, $index, $column) {
                        return Url::toRoute(['users/' . $action, 'id' => $model->id]);
                    },
                ],
            ],
        ]); ?>
    </div>

    <div class="filter-container">
        <h2>Filtro</h2>
        <?php $form = ActiveForm::begin([
            'action' => ['index'],
            'method' => 'get',
            'options' => ['id' => 'user-search-form']
        ]); ?>

        <?= $form->field($searchModel, 'username')->textInput() ?>

        <?= $form->field($searchModel, 'email')->textInput() ?>

        <?= $form->field($searchModel, 'status')->dropDownList([
            '' => 'Todos',
            'active' => 'Ativo',
            'inactive' => 'Inativo',
            'blocked' => 'Bloqueado',
        ]) ?>

        <div class="form-group">
            <?= Html::submitButton('Filtrar', ['class' => 'btn btn-primary']) ?>
            <?= Html::button('Limpar', ['class' => 'btn btn-default', 'id' => 'reset-button']) ?>
            <?= Html::button('Repor', ['class' => 'btn btn-default', 'id' => 'reset-table-button']) ?>
        </div>

        <?php ActiveForm::end(); ?>
    </div>

</div>


<?php
$customCss = <<<CSS
    body {
        background-color: #f5f5f5; /* Fundo claro para a página toda */
    }
    .users-index {
        padding: 20px;
    }
    .users-index h1 {
        margin-bottom: 20px;
        color: #333; /* Cor do texto */
    }
    .users-index .btn {
        margin-right: 10px;
    }
    .table-container {
        background-color: #fff; /* Fundo branco */
        padding: 20px;
        border-radius: 10px; /* Bordas arredondadas */
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.05); /* Sombra suave */
        margin-top: 20px;
    }
CSS;

$this->registerCss($customCss);
?>

<?php
$script = <<< JS
$(document).ready(function(){
    $('#reset-button').click(function(){
        $('input[type="text"]').val('');
        $('select').val('');
        $('#user-search-form').submit();
        return false;
    });
    
    $('#reset-table-button').click(function(){
        $.pjax.reload({container:'#user-grid'});
    });
});
JS;
$this->registerJs($script);
?>

