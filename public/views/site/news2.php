<?php

/** @var yii\web\View $this */
use yii\helpers\Url;

$this->title = 'Detalhes da Notícia 2';
?>
<style>
    body {
        background-color: #d0d0d0; /* Fundo escuro */
    }
    .site-news2 {
        font-family: Arial, sans-serif;
        color: #333;
        padding: 20px;
        background-color: #f9f9f9;
        margin: 0 auto;
        width: 80%;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); /* Sombra ao redor da caixa */
    }
    .site-news2 h1 {
        color: #444;
        border-bottom: 1px solid #ddd;
        padding-bottom: 10px;
    }
    .site-news2 .images {
        display: flex;
        justify-content: space-between;
        margin-bottom: 20px;
    }
    .site-news2 .images img {
        width: 49%; /* Ajuste a largura conforme necessário */
    }
    .site-news2 p {
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

<div class="site-news2">
    <h1>Mercedes-Benz termina 2022 com fortes vendas de veículos topo de gama e elétricos</h1>
    <div class="images">
        <img src="<?= Url::to('@web/imagens/news2.jpg') ?>" alt="Imagem 1" >
        <img src="<?= Url::to('@web/imagens/news2_2.jpg') ?>" alt="Imagem 2" >
    </div>
    <p>A Mercedes-Benz terminou 2022 com um último trimestre forte a nível de vendas, com o fornecimento de 540,800 veículos ligeiros de passageiros Mercedes-Benz (+17 %) e um aumento das vendas de veículos topo de gama e veículos elétricos a bateria. Rumo a um futuro totalmente elétrico, as vendas globais de modelos xEV (PHEV e BEV, incluindo a marca smart) da Mercedes-Benz atingiram as 319,200 unidades (+19%), representando 15 % das vendas unitárias totais da divisão de veículos ligeiros de passageiros Mercedes-Benz em 2022.</p>
    <p>Este desempenho de vendas sólido é um testemunho do compromisso da Mercedes-Benz com a inovação e a sustentabilidade. A empresa continua a investir em tecnologia de ponta para criar veículos que não só atendem às necessidades dos clientes, mas também contribuem para um futuro mais sustentável.</p>
    <p><?= \yii\helpers\Html::a('Voltar', ['site/index'], ['class' => 'btn btn-primary']) ?></p>
</div>

