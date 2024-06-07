<?php
use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Mercedes Classe C';
$this->params['breadcrumbs'][] = $this->title;
$css = <<< CSS
body {
    background-color: #d0d0d0;
}
CSS;

$this->registerCss($css);
?>

<div class="mercedes-modelos">
    <h1><?= Html::encode($this->title) ?></h1>
    <div class="row">
        <?php foreach ($modelos as $modelo): ?>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="<?= Url::to($modelo['imagem']) ?>" class="card-img-top" alt="<?= Html::encode($modelo['nome']) ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?= Html::encode($modelo['nome']) ?></h5>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><strong>Motor:</strong> <?= Html::encode($modelo['motor']) ?></li>
                            <li class="list-group-item"><strong>Potência:</strong> <?= Html::encode($modelo['potencia']) ?></li>
                            <li class="list-group-item"><strong>Aceleração 0-100 km/h:</strong> <?= Html::encode($modelo['aceleracao']) ?></li>
                            <li class="list-group-item"><strong>Preço:</strong> <?= Html::encode($modelo['preco']) ?></li>
                        </ul>
                        <a href="<?= Url::to(['mercedes/details4', 'id' => $modelo['id']]) ?>" class="btn btn-primary mt-3">Mais Detalhes</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<style>
.mercedes-modelos {
    padding: 20px;
}

.mercedes-modelos .card {
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.2s;
}

.mercedes-modelos .card:hover {
    transform: scale(1.05);
}

.mercedes-modelos .card img {
    height: 200px;
    object-fit: cover;
}
</style>