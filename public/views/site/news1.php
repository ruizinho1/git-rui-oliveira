<?php

/** @var yii\web\View $this */
use yii\helpers\Url;

$this->title = 'Detalhes da Notícia 1';
?>
<style>
    body {
        background-color: #d0d0d0; /* Fundo escuro */
    }
    .site-news1 {
        font-family: Arial, sans-serif;
        color: #333;
        padding: 20px;
        background-color: #f9f9f9;
        margin: 0 auto;
        width: 80%;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); /* Sombra ao redor da caixa */
    }
    .site-news1 h1 {
        color: #444;
        border-bottom: 1px solid #ddd;
        padding-bottom: 10px;
    }
    .site-news1 .images {
        display: flex;
        justify-content: space-between;
        margin-bottom: 20px;
    }
    .site-news1 .images img {
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

<div class="site-news1">
    <h1>Russell: Mercedes se saindo bem com motor de F1 de 2026</h1>
    <div class="images">
        <img src="<?= Url::to('@web/imagens/news1.jpg') ?>" alt="Imagem 1" >
        <img src="<?= Url::to('@web/imagens/news1_1.jpg') ?>" alt="Imagem 2" >
    </div>
    <p>Na rodada 7 do Campeonato Mundial de Fórmula 1, realizada no Grande Prêmio da Emilia Romagna, Imola, Itália, George Russell, piloto da Mercedes, expressou confiança na performance do time. A equipe Mercedes AMG F1 apresentou o W15 narizcone, um modelo que tem atraído atenção significativa.</p>
    <p>De acordo com Russell, a Mercedes está se saindo bem com o motor de F1 de 2026. Ele acredita que a equipe está no caminho certo para manter sua posição dominante no esporte. A Mercedes tem sido uma força dominante na Fórmula 1 nos últimos anos, e a confiança de Russell sugere que a equipe está otimista sobre o futuro.</p>
    <p>Esta notícia é particularmente relevante à medida que nos aproximamos da temporada de 2026. Com as mudanças regulatórias previstas para a Fórmula 1, as equipes estão trabalhando arduamente para desenvolver seus motores e carros para se adaptar. A Mercedes parece estar na vanguarda deste desenvolvimento, o que poderia ter implicações significativas para a competição.</p>
    <p><?= \yii\helpers\Html::a('Voltar', ['site/index'], ['class' => 'btn btn-primary']) ?></p>
</div>

