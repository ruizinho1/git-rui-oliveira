<?php

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Sobre';
$this->params['breadcrumbs'][] = $this->title;

// Estilo CSS personalizado
$css = <<< CSS
body {
    background-color: #d0d0d0; 
}

.site-about {
    padding: 20px;
}

.jumbotron {
    background-color: #f8f9fa;
    padding: 50px;
    margin-bottom: 30px;
    border-radius: 10px;
}

.jumbotron h1 {
    color: #343a40;
}

.jumbotron p {
    color: #6c757d;
}

.card {
    margin-bottom: 30px;
}

.card-img-top {
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
}

.card-body {
    background-color: #f8f9fa;
    border-bottom-left-radius: 10px;
    border-bottom-right-radius: 10px;
}

.card-title {
    color: #343a40;
}

.card-text {
    color: #6c757d;
}

.btn-primary {
    background-color: #007bff;
    border-color: #007bff;
}

.btn-primary:hover {
    background-color: #0056b3;
    border-color: #0056b3;
}

.flash-banner {
    position: fixed;
    top: 50%;
    transform: translateY(-50%);
    z-index: 1000;
    width: 200px;
    height: 200px;
    background-color: #ffc107;
    border-radius: 10px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
    padding: 20px;
    text-align: center;
    line-height: 160px;
    font-size: 20px;
    color: #343a40;
    font-weight: bold;
}

.left-flash-banner {
    left: 0;
}

.right-flash-banner {
    right: 0;
}
CSS;

$this->registerCss($css);

?>
<div class="site-about">
    <!-- Flashs laterais -->
    <div class="flash-banner left-flash-banner">Oferta Especial!</div>
    <div class="flash-banner right-flash-banner">Não Perca!</div>

    <div class="jumbotron">
        <h1><?= Html::encode($this->title) ?></h1>
        <p class="lead">Bem-vindo à Mercedes Motors, onde a excelência em engenharia e o design sofisticado se unem. Somos uma empresa dedicada à criação de automóveis excepcionais, inspirados pelo icônico Mercedes-Benz. Desde 1926, temos vindo a moldar o futuro da condução de luxo, combinando desempenho, inovação e elegância. Na Mercedes Motors, a nossa missão é simples: proporcionar uma experiência de condução incomparável. Os nossos veículos são mais do que meros meios de transporte; são extensões do seu estilo de vida, símbolos de prestígio e sofisticação. Com uma herança rica e uma visão pioneira, estamos a escrever o próximo capítulo na história automóvel. Junte-se a nós nesta jornada emocionante. Descubra a potência dos nossos motores, a precisão das nossas linhas e a elegância das nossas curvas. Na Mercedes Motors, não vendemos apenas carros; entregamos luxo sobre rodas.</p>
    </div>

    <div class="jumbotron">
        <h1>Nossa História</h1>
        <p class="lead">Em 1926, dois visionários da indústria automobilística, Gottlieb Daimler e Karl Benz, uniram forças para criar a Mercedes-Benz. Naquela época, a Mercedes-Benz tinha uma predileção por nomes que refletiam a excelência e a inovação, como o Mercedes Simplex, Mercedes 35 hp e o Mercedes-Benz SSK. Assim, Daimler e Benz anunciaram que o novo padrão de luxo seria chamado de Mercedes-Benz. A escolha desse nome não foi aleatória; ela refletia a estratégia da Mercedes-Benz de criar uma conexão memorável com o público e destacar-se no mercado automobilístico. A Mercedes-Benz nasceu como uma resposta audaciosa à demanda por veículos mais luxuosos e rapidamente se tornou um ícone da indústria automotiva. Mas como exatamente surgiu o nome “Mercedes-Benz”? A história é fascinante e envolve um toque de visão e determinação. De acordo com a Mercedes-Benz, o nome foi inspirado em duas fontes distintas. “Mercedes” era o nome da filha de Emil Jellinek, um empresário austríaco que trabalhava com a Daimler-Motoren-Gesellschaft (DMG), e “Benz” veio de Karl Benz, que patenteou o primeiro automóvel. Juntos, eles formaram o nome “Mercedes-Benz”, um símbolo de inovação e luxo no mundo automobilístico. A tradição continua!</p>
    </div>

    <hr>

    <div class="row">
        <div class="col-lg-4">
            <div class="card">
                <img src="<?= Url::to('@web/imagens/mercedesa180cdi.jpg') ?>" class="card-img-top" alt="Modelo 1">
                <div class="card-body">
                    <h5 class="card-title">Mercedes A 180 CDI (BlueEFFICIENCY)</h5>
                    <p class="card-text">O Mercedes A 180 CDI (BlueEFFICIENCY) é um carro compacto equipado com um motor diesel de 1.5 litros e 109 cavalos de potência. Este modelo é conhecido pela sua eficiência de combustível e baixas emissões devido à tecnologia BlueEFFICIENCY.</p>
                    <a href="<?= Url::to(['mercedes/modelo2']) ?>" class="btn btn-primary">Saiba Mais</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <img src="<?= Url::to('@web/imagens/mercedesc200.jpg') ?>" class="card-img-top" alt="Modelo 2">
                <div class="card-body">
                    <h5 class="card-title">Mercedes C 200</h5>
                    <p class="card-text">Este modelo é alimentado por combustível híbrido, oferecendo uma experiência de condução suave e poderosa, com um interior luxuoso e tecnologia avançada.</p>
                    <a href="<?= Url::to(['mercedes/modelo4']) ?>" class="btn btn-primary">Saiba Mais</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <img src="<?= Url::to('@web/imagens/mercedesS350D.jpg') ?>" class="card-img-top" alt="Modelo 3">
                <div class="card-body">
                    <h5 class="card-title">Mercedes S350D</h5>
                    <p class="card-text">O Mercedes S350D é um carro de luxo com um motor diesel V6 de 2987 cm³ e 286 cavalos de potência. Oferece uma experiência de condução suave e poderosa, com um interior luxuoso e tecnologia avançada. É verdadeiramente uma obra-prima da engenharia automotiva moderna.</p>
                    <a href="<?= Url::to(['mercedes/modelo1']) ?>" class="btn btn-primary">Saiba Mais</a>
                </div>
            </div>
        </div>
    </div>
</div>