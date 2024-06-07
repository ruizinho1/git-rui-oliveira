<?php

/** @var yii\web\View $this */
use yii\helpers\Url;

$this->title = 'Detalhes da Notícia 1';
?>
<style>
    body {
        background-color: #d0d0d0; /* Fundo escuro */
    }
    .site-news5 {
        font-family: Arial, sans-serif;
        color: #333;
        padding: 20px;
        background-color: #f9f9f9;
        margin: 0 auto;
        width: 80%;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); /* Sombra ao redor da caixa */
    }
    .site-news5 h1 {
        color: #444;
        border-bottom: 1px solid #ddd;
        padding-bottom: 10px;
    }
    .site-news5 .images {
        display: flex;
        justify-content: space-between;
        margin-bottom: 20px;
    }
    .site-news5 .images img {
        width: 49%; /* Ajuste a largura conforme necessário */
    }
    .site-news1 p {
        line-height: 1.6;
    }
    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
        color: #fff;
        padding: 10px 20px;
        text-decoration: none;
        border-radius: 5px;
    }
    .btn-primary:hover {
        background-color: #0056b3;
        border-color: #004085;
    }
</style>

<div class="site-news5">
    <h1>Russell: Mercedes se saindo bem com motor de F1 de 2026</h1>
    <div class="images">
        <img src="<?= Url::to('@web/imagens/news5.jpg') ?>" alt="Imagem 1" >
        <img src="<?= Url::to('@web/imagens/news5_5.jpg') ?>" alt="Imagem 2" >
    </div>
    <p>A Mercedes-Benz lançou o 2025 Mercedes-AMG CLE53 Cabriolet, que oferece o lado suave do desempenho. Este novo modelo tem 443 HP e um teto retrátil que pode ser aberto em apenas 20 segundos.</p>
    <p>Este lançamento é uma adição significativa à linha de produtos da Mercedes-Benz, demonstrando seu compromisso contínuo com a inovação e a excelência em engenharia. O CLE53 Cabriolet é equipado com uma série de características de luxo, incluindo assentos de couro premium, um sistema de som surround de alta fidelidade e um conjunto abrangente de tecnologias de assistência ao motorista.</p>
    <p>Além disso, o novo Cabriolet destaca-se pela sua eficiência de combustível e desempenho ambiental. Graças à sua tecnologia de motor híbrido leve, o CLE53 é capaz de oferecer uma condução potente e responsiva, ao mesmo tempo que minimiza o seu impacto ambiental.</p>
    <p><?= \yii\helpers\Html::a('Voltar', ['site/index'], ['class' => 'btn btn-primary']) ?></p>
</div>