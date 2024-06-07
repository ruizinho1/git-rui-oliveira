<?php

/** @var yii\web\View $this */
use yii\helpers\Url;

$this->title = 'Detalhes da Notícia 2';
?>
<style>
    body {
        background-color: #d0d0d0; /* Fundo escuro */
    }
    .site-news6 {
        font-family: Arial, sans-serif;
        color: #333;
        padding: 20px;
        background-color: #f9f9f9;
        margin: 0 auto;
        width: 80%;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); /* Sombra ao redor da caixa */
    }
    .site-news6 h1 {
        color: #444;
        border-bottom: 1px solid #ddd;
        padding-bottom: 10px;
    }
    .site-news6 .images {
        display: flex;
        justify-content: space-between;
        margin-bottom: 20px;
    }
    .site-news6 .images img {
        width: 49%; /* Ajuste a largura conforme necessário */
    }
    .site-news6 p {
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

<div class="site-news6">
    <h1>Mercedes-Benz lança o 2025 Mercedes-AMG GT63 S E Performance</h1>
    <div class="images">
        <img src="<?= Url::to('@web/imagens/news6.jpg') ?>" alt="Imagem 1" >
        <img src="<?= Url::to('@web/imagens/news6_6.jpg') ?>" alt="Imagem 2" >
    </div>
    <p>A Mercedes-Benz lançou o 2025 Mercedes-AMG GT63 S E Performance, que é o veículo de produção mais rápido que a Mercedes-AMG já construiu. Este novo modelo tem mais de 800 cavalos de potência, demonstrando o compromisso contínuo da Mercedes-Benz com a inovação e a excelência em engenharia.</p>
    <p>Este lançamento é uma adição significativa à linha de produtos da Mercedes-Benz. O GT63 S E Performance é equipado com uma série de características de luxo, incluindo assentos de couro premium, um sistema de som surround de alta fidelidade e um conjunto abrangente de tecnologias de assistência ao motorista.</p>
    <p>Além disso, o novo GT63 S E Performance destaca-se pela sua eficiência de combustível e desempenho ambiental. Graças à sua tecnologia híbrida, o GT63 é capaz de oferecer uma condução potente e responsiva, ao mesmo tempo que minimiza o seu impacto ambiental.</p>
    <p><?= \yii\helpers\Html::a('Voltar', ['site/index'], ['class' => 'btn btn-primary']) ?></p>
</div>
