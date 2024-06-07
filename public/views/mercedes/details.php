<?php
use yii\helpers\Html;
use yii\helpers\Url;

$this->title = $modelo['nome'];
$this->params['breadcrumbs'][] = ['label' => 'Modelos Mercedes', 'url' => ['modelo1']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="mercedes-details">
    <h1><?= Html::encode($this->title) ?></h1>
    <div class="row">
        <div class="col-md-6">
            <img src="<?= Url::to($modelo['imagem']) ?>" class="img-fluid" alt="<?= Html::encode($modelo['nome']) ?>">
        </div>
        <div class="col-md-6">
            <h2>Especificações</h2>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><strong>Motor:</strong> <?= Html::encode($modelo['motor']) ?></li>
                <li class="list-group-item"><strong>Potência:</strong> <?= Html::encode($modelo['potencia']) ?></li>
                <li class="list-group-item"><strong>Aceleração 0-100 km/h:</strong> <?= Html::encode($modelo['aceleracao']) ?></li>
                <li class="list-group-item"><strong>Preço:</strong> <?= Html::encode($modelo['preco']) ?></li>
                <!-- Adicionando detalhes adicionais -->
                <li class="list-group-item"><strong>Ano:</strong> <?= Html::encode($modelo['ano']) ?></li>
                <li class="list-group-item"><strong>Tipo de Combustível:</strong> <?= Html::encode($modelo['tipo de combustivel']) ?></li>
                <li class="list-group-item"><strong>Consumo:</strong> <?= Html::encode($modelo['consumo']) ?></li>
            </ul>
            <a href="<?= Url::to(['mercedes/modelo1']) ?>" class="btn btn-primary mt-3">Voltar</a>
        </div>
    </div>
</div>


<style>
.mercedes-details {
    padding: 20px;
}

.mercedes-details img {
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.mercedes-details .list-group-item {
    border: none;
    padding: 10px 0;
}
</style>