<?php

/** @var yii\web\View $this */

use yii\bootstrap5\Carousel;
use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'MercedesMotors';
$this->registerCss("
body {
    background-color: #d0d0d0; /* Cor de fundo cinza claro */
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

");

?>

<div class="site-index">

    <div class="jumbotron text-center bg-transparent mt-5 mb-5">
        <div class="carousel-background"> <!-- Caixa com fundo colorido -->
            <?= Carousel::widget([
                'items' => [
                    [
                        'content' => '<img src="' . Url::to('@web/imagens/mercedes.jpg') . '" alt="Slide 1"/>',
                        'caption' => '<h4>Slide 1</h4><p>GLE 450 d 4MATIC Coupé</p>',
                    ],
                    [
                        'content' => '<img src="' . Url::to('@web/imagens/mercedes1.jpg') . '" alt="Slide 2"/>',
                        'caption' => '<h4>Slide 2</h4><p>AMG G 63</p>',
                    ],
                    [
                        'content' => '<img src="' . Url::to('@web/imagens/mercedes2.jpg') . '" alt="Slide 3"/>',
                        'caption' => '<h4>Slide 3</h4><p>Mercedes-AMG One</p>',
                    ],
                ],
            ]) ?>
        </div>
    </div>

    <div class="body-content">
        <div class="row">
            <div class="col-lg-3 statistic">
                <div class="statistic-inner">
                    <h2> US$ 70.000.</h2>
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

        <h2 class="text-center mt-5 mb-3">Notícias</h2> <!-- Título de Notícias -->
        <!-- Primeira linha de containers -->
        <div class="row news-container">
            <div class="col-md-4">
                <div class="news-item">
                    <img src="<?= Url::to('@web/imagens/news1.jpg') ?>" alt="Notícia 1" class="news-image">
                    <div class="news-content">
                        <div class="news-title">Russell: Mercedes se saindo bem com motor de F1 de 2026.</div>
                        <div class="news-description">Mercedes AMG F1 W15 narizcone. 19 de maio de 2024. Campeonato Mundial de Fórmula 1, Rodada 7, Grande Prêmio da Emilia Romagna, Imola, Itália, Dia da Corrida. George Russell está certo de que a equipe...</div>
                        <a href="<?= Url::to(['site/noticia1']) ?>" class="news-button">Saiba mais</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="news-item">
                    <img src="<?= Url::to('@web/imagens/news2.jpg') ?>" alt="Notícia 2" class="news-image">
                    <div class="news-content">
                        <div class="news-title">Mercedes-Benz termina 2022 com fortes vendas de veículos topo de gama e elétricos</div>
                        <div class="news-description">A Mercedes-Benz terminou 2022 com um último trimestre forte a nível de vendas, com o fornecimento de 540,800 veículos ligeiros de passageiros Mercedes-Benz (+17 %) e um aumento das vendas de veículos topo de gama e veículos elétricos a bateria.</div>
                        <a href="<?= Url::to(['site/noticia2']) ?>" class="news-button">Saiba mais</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="news-item">
                    <img src="<?= Url::to('@web/imagens/news3.jpg') ?>" alt="Notícia 3" class="news-image">
                    <div class="news-content">
                        <div class="news-title">Mercedes-Benz recolhe 250 000 veículos devido a risco de incêndio</div>
                        <div class="news-description">A Mercedes-Benz lançou uma recolha a nível mundial de cerca de 250.000 automóveis. Na Alemanha, dezenas de milhares de carros da marca tiveram de ser levados à oficina devido a fusíveis defeituosos. As autoridades estão a trabalhar para resolver a situação e garantir a segurança de todos os envolvidos.</div>
                        <a href="<?= Url::to(['site/noticia3']) ?>" class="news-button">Saiba mais</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Segunda linha de containers -->
        <div class="row news-container">
            <div class="col-md-4">
                <div class="news-item">
                    <img src="<?= Url::to('@web/imagens/news4.jpg') ?>" alt="Notícia 4" class="news-image">
                    <div class="news-content">
                        <div class="news-title">Mercedes-Benz cancela plataforma de próxima geração para EQS, EQE EVs</div>
                        <div class="news-description">As vendas fracas da geração atual de EVs de alta especificação levaram a fabricante alemã a reduzir os investimentos. A Mercedes-Benz admitiu a derrota e, segundo relatos, trocou o motor de quatro cilindros pelo V8 no CLE63.</div>
                        <a href="<?= Url::to(['site/noticia4']) ?>" class="news-button">Saiba mais</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="news-item">
                    <img src="<?= Url::to('@web/imagens/news5.jpg') ?>" alt="Notícia 5" class="news-image">
                    <div class="news-content">
                        <div class="news-title">Mercedes-Benz lança o 2025 Mercedes-AMG CLE53 Cabriolet</div>
                        <div class="news-description"> A Mercedes-Benz lançou o 2025 Mercedes-AMG CLE53 Cabriolet, que oferece o lado suave do desempenho. Este novo modelo tem 443 HP e um teto retrátil que pode ser aberto em apenas 20 segundos.</div>
                        <a href="<?= Url::to(['site/noticia5']) ?>" class="news-button">Saiba mais</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="news-item">
                    <img src="<?= Url::to('@web/imagens/news6.jpg') ?>" alt="Notícia 6" class="news-image">
                    <div class="news-content">
                        <div class="news-title">Mercedes-Benz lança o 2025 Mercedes-AMG GT63 S E Performance</div>
                        <div class="news-description">A Mercedes-Benz lançou o 2025 Mercedes-AMG GT63 S E Performance, que é o veículo de produção mais rápido que a Mercedes-AMG já construiu. Este novo modelo tem mais de 800 cavalos de potência.</div>
                        <a href="<?= Url::to(['site/noticia6']) ?>" class="news-button">Saiba mais</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

