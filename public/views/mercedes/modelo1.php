<?php
// views/mercedes/modelo1.php

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Modelos Mercedes';
$css = <<< CSS
body {
    background-color: #d0d0d0;
}
CSS;

$this->registerCss($css);
?>


<?php if (!Yii::$app->user->isGuest): ?>
<?= Html::a('View Models', ['mercedes-models/index'], ['class' => 'btn btn-primary mt-3']) ?>
<?php endif; ?>

<div class="row">
    <?php foreach ($modelos as $modelo): ?>
        <div class="col-md-4 mb-4">
            <div class="card">
            <p><img src="<?= Html::encode($modelo->getImageUrl()) ?>" class="img-fluid" alt="<?= Html::encode($modelo->nome) ?>"></p>
                <div class="card-body">
                    <h5 class="card-title"><?= Html::encode($modelo->nome) ?></h5>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><strong>Motor:</strong> <?= Html::encode($modelo->motor) ?></li>
                        <li class="list-group-item"><strong>Potência:</strong> <?= Html::encode($modelo->potencia) ?></li>
                        <li class="list-group-item"><strong>Aceleração 0-100 km/h:</strong> <?= Html::encode($modelo->acelaracao) ?></li>
                        <!-- Adicione aqui outros atributos se necessário -->
                    </ul>
                    <p><?= Html::a('Mais Detalhes', ['mercedes/details', 'id' => $modelo->id], ['class' => 'btn btn-primary']) ?></p>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
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
