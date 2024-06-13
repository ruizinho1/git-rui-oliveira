<?php

/** @var yii\web\View $this */

use yii\bootstrap5\Carousel;
use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'MercedesMotors';
$this->registerCss("
body {
    background-color: #d0d0d0; /* Cor de fundo cinza claro */
    position: relative;
    z-index: 0;
}

.carousel-img {
    width: 100%;
    height: 500px;
    object-fit: cover;
}

.carousel-background {
    background-color: rgb(0, 0, 0); /* Fundo preto com 100% de opacidade */
    color: #fff;
    padding: 20px;
}

.statistic {
    padding: 20px;
    position: relative; /* Garantir que estatísticas fiquem sobre o vídeo */
    z-index: 2;
}

.statistic-inner {
    border-right: 5px solid #000;
    padding-right: 20px;
}

.statistic:last-child .statistic-inner {
    border-right: none;
}

.news-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    margin-top: 30px;
    max-width: 1200px; /* Definir um max-width para centralizar o conteúdo */
    margin-left: auto;
    margin-right: auto;
    z-index: 2; /* Garantir que notícias fiquem sobre o vídeo */
    position: relative;
}

.news-item {
    background-color: #fff;
    border: 1px solid #ccc;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    margin-bottom: 20px;
    width: 100%; /* Ajustar a largura para que três itens caibam em uma linha */
    overflow: hidden;
    transition: transform 0.3s;
    display: flex;
    flex-direction: column;
}

.news-item:hover {
    transform: translateY(-10px);
}

.news-image {
    width: 100%;
    height: 200px;
    object-fit: cover;
}

.news-content {
    padding: 20px;
}

.news-title {
    font-size: 18px;
    font-weight: bold;
    margin-bottom: 10px;
}

.news-description {
    font-size: 14px;
    margin-bottom: 20px;
}

.news-button {
    display: inline-block;
    padding: 10px 15px;
    background-color: #000;
    color: #fff;
    text-transform: uppercase;
    border-radius: 5px;
    text-decoration: none;
}

.news-button:hover {
    background-color: #555;
}

.video-container {
    position: fixed;
    top: 0;
    left: 50%; /* Posiciona o vídeo no meio da tela horizontalmente */
    transform: translateX(-50%); /* Corrige a posição do vídeo */
    width: 80%; /* Define a largura do vídeo */
    z-index: -1; /* Coloca o vídeo atrás de todo o conteúdo */
}

#carroVideo {
    width: 100%; /* Faz o vídeo cobrir toda a largura do contêiner */
    height: auto; /* Mantém a proporção original do vídeo */
}

.jumbotron {
    margin-top: 300px; /* Move o jumbotron para baixo para dar espaço para o vídeo */
    position: relative;
    z-index: 1;
}
    .btn-leia-mais {
    background-color: black;
    color: white;
}

");

?>

<div class="site-index">

    <div class="video-background">
        <video autoplay muted loop id="carroVideo">
            <source src="<?= Url::to('@web/videos/carro.mp4') ?>" type="video/mp4">
            Seu navegador não suporta o elemento de vídeo HTML5.
        </video>
    </div>



    <div class="body-content">
        <div class="row">
            <div class="col-lg-3 statistic">
                <div class="statistic-inner">
                    <h2>US$ 70.000.</h2>
                    <p>Iniciando o MSRP</p>
                </div>
            </div>
            <div class="col-lg-3 statistic">
                <div class="statistic-inner">
                    <h2>503+</h2>
                    <p>HP máximo disponível</p>
                </div>
            </div>
            <div class="col-lg-3 statistic">
                <div class="statistic-inner">
                    <h2>3,8 segundos+</h2>
                    <p>0 a 100 horários disponíveis</p>
                </div>
            </div>
            <div class="col-lg-3 statistic">
                <div class="statistic-inner">
                    <h2>V8 biturbo</h2>
                    <p>Motorizações Disponíveis</p>
                </div>
            </div>
        </div>

        <div class="jumbotron">
        <h1>Notícias</h1>
    </div>

    <div class="news-container">
    <div class="row">
        <?php $i = 1; ?>
        <?php foreach ($noticias as $noticia): ?>
            <?php if ($i <= 3): ?>
                <div class="col-lg-4">
                    <div class="news-item">
                        <img src="<?= Url::to('@web/imagens/news' . $i . '.jpg') ?>" alt="Notícia <?= $i ?>" class="news-image">
                        <h2><?= Html::encode($noticia->titulo) ?></h2>
                        <p><?= Html::encode($noticia->conteudo) ?></p>
                        <?php if ($i == 1): ?>
                            <p><a class="btn btn-default btn-leia-mais" href="<?= Url::to(['site/noticia1', 'id' => $noticia->id]) ?>">Leia mais &raquo;</a></p>
                        <?php elseif ($i == 2): ?>
                            <p><a class="btn btn-default btn-leia-mais" href="<?= Url::to(['site/noticia2', 'id' => $noticia->id]) ?>">Leia mais &raquo;</a></p>
                        <?php else: ?>
                            <p><a class="btn btn-default btn-leia-mais" href="<?= Url::to(['site/noticia3', 'id' => $noticia->id]) ?>">Leia mais &raquo;</a></p>
                        <?php endif; ?>
                    </div>
                </div>
                <?php $i++; ?>
            <?php else: ?>
                <?php break; ?>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
</div>
    </div>
    </div>

</div>
