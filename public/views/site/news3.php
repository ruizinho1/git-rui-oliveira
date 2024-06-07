<?php

/** @var yii\web\View $this */
use yii\helpers\Url;

$this->title = 'Detalhes da Notícia 2';
?>
<style>
    body {
        background-color: #d0d0d0; /* Fundo escuro */
    }
    .site-news3 {
        font-family: Arial, sans-serif;
        color: #333;
        padding: 20px;
        background-color: #f9f9f9;
        margin: 0 auto;
        width: 80%;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); /* Sombra ao redor da caixa */
    }
    .site-news3 h1 {
        color: #444;
        border-bottom: 1px solid #ddd;
        padding-bottom: 10px;
    }
    .site-news3 .images {
        display: flex;
        justify-content: space-between;
        margin-bottom: 20px;
    }
    .site-news3 .images img {
        width: 49%; /* Ajuste a largura conforme necessário */
    }
    .site-news3 p {
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

<div class="site-news3">
    <h1>Mercedes-Benz recolhe 250 000 veículos devido a risco de incêndio</h1>
    <div class="images">
        <img src="<?= Url::to('@web/imagens/news3.jpg') ?>" alt="Imagem 1" >
        <img src="<?= Url::to('@web/imagens/news3_3.jpg') ?>" alt="Imagem 2" >
    </div>
    <p>A Mercedes-Benz lançou uma recolha a nível mundial de cerca de 250.000 automóveis. Na Alemanha, dezenas de milhares de carros da marca tiveram de ser levados à oficina devido a fusíveis defeituosos. As autoridades estão a trabalhar para resolver a situação e garantir a segurança de todos os envolvidos. Este incidente destaca a importância da segurança nos veículos e a necessidade de medidas rigorosas para prevenir tais problemas no futuro.</p>
    <p>Muitos modelos construídos em 2023 afetados. Um porta-voz do fabricante de automóveis Mercedes-Benz confirmou o recall. Os modelos afetados são os modelos Classe C, Classe E, Classe S, AMG GT, EQE, EQS, GLC, CLE, AMG GT e SL construídos em 2023.</p>
    <p>Só na Alemanha, 37.000 carros terão, provavelmente, de ser levados à oficina. De acordo com o fabricante de automóveis, certas peças destes veículos terão de ser substituídas como medida de precaução. O trabalho de reparação é gratuito para os clientes, mas pode levar de duas a cinco horas e meia, dependendo do equipamento da oficina.</p>
    <p><?= \yii\helpers\Html::a('Voltar', ['site/index'], ['class' => 'btn btn-primary']) ?></p>
</div>
