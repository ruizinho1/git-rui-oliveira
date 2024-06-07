<?php

namespace app\controllers;

use yii\web\Controller;

class MercedesController extends Controller
{
    public function actionModelo1()
    {
        $modelos = [
            [
                'id' => 'mercedes_s500',
                'nome' => 'Mercedes S500',
                'imagem' => '@web/imagens/mercedesS500.jpg',
                'motor' => 'V8, 4663 cm³1',
                'potencia' => '449 HP / 455 PS / 335 kW @ 5250-5500 rpm',
                'aceleracao' => '4.8 segundos',
                'preco' => '€110.000',
            ],
            [
                'id' => 'mercedes_s560',
                'nome' => 'Mercedes S560',
                'imagem' => '@web/imagens/mercedesS560.jpg',
                'motor' => 'V8, 4.0 biturbo, 3982 cm³',
                'potencia' => '469 HP / 345 kW',
                'aceleracao' => '4.7 segundos',
                'preco' => '€170.000',
            ],
            [
                'id' => 'mercedes_s63_amg',
                'nome' => 'Mercedes S63 AMG',
                'imagem' => '@web/imagens/mercedesS63AMG.jpg',
                'motor' => 'V8, 4.0 biturbo, 3982 cm³',
                'potencia' => '802 CV / 590 kW',
                'aceleracao' => '3.3 segundos',
                'preco' => '€180.000',
            ],
            [
                'id' => 'mercedes_s65_amg',
                'nome' => 'Mercedes S65 AMG',
                'imagem' => '@web/imagens/mercedesS65AMG.jpg',
                'motor' => 'V12, 5980 cm³',
                'potencia' => '630 HP / 463 kW',
                'aceleracao' => '4.4 segundos',
                'preco' => '€230.000',
            ],
            [
                'id' => 'mercedes_s450',
                'nome' => 'Mercedes S450',
                'imagem' => '@web/imagens/mercedesS450.jpg',
                'motor' => 'Em linha 6, 2999 cm³',
                'potencia' => '362 HP / 367 PS / 270 kW',
                'aceleracao' => '5.1 segundos',
                'preco' => '€80.000',
            ],
            [
                'id' => 'mercedes_s350d',
                'nome' => 'Mercedes S350D',
                'imagem' => '@web/imagens/mercedesS350D.jpg',
                'motor' => 'V6, 2987 cm³',
                'potencia' => '258 HP / 190 kW',
                'aceleracao' => '6.5 segundos',
                'preco' => '€36,000',
            ],
        ];

        return $this->render('modelo1', ['modelos' => $modelos]);
    }

    public function actionDetails($id)
    {
        $modelos = [
            'mercedes_s500' => [
                'nome' => 'Mercedes S500',
                'imagem' => '@web/imagens/mercedesS500.jpg',
                'motor' => 'V8, 4663 cm³1',
                'potencia' => '449 HP / 455 PS / 335 kW @ 5250-5500 rpm',
                'aceleracao' => '4.8 segundos',
                'preco' => '€110.000',
                'ano' => '2013', 
                'tipo de combustivel' => 'Gasolina',
                'consumo' => '8.6-9.1 l/100 km',
            ],
            'mercedes_s560' => [
                'nome' => 'Mercedes S560',
                'imagem' => '@web/imagens/mercedesS560.jpg',
                'motor' => 'V8, 4.0 biturbo, 3982 cm³',
                'potencia' => '469 HP / 345 kW',
                'aceleracao' => '4.7 segundos',
                'preco' => '€170.000',
                'ano' => '2017', 
                'tipo de combustivel' => 'Gasolina',
                'consumo' => '8.5-8.7 l/100 km',
            ],
            'mercedes_s63_amg' => [
                'nome' => 'Mercedes S63 AMG',
                'imagem' => '@web/imagens/mercedesS63AMG.jpg',
                'motor' => 'V8, 4.0 biturbo, 3982 cm³',
                'potencia' => '802 CV / 590 kW',
                'aceleracao' => '3.3 segundos',
                'preco' => '€180.000',
                'ano' => '2017', 
                'tipo de combustivel' => 'Gasolina',
                'consumo' => '8.9 l/100 km',
            ],
            'mercedes_s65_amg' => [
                'nome' => 'Mercedes S65 AMG',
                'imagem' => '@web/imagens/mercedesS65AMG.jpg',
                'motor' => 'V12, 5980 cm³',
                'potencia' => '630 HP / 463 kW',
                'aceleracao' => '4.4 segundos',
                'preco' => '€230.000',
                'ano' => '2013', 
                'tipo de combustivel' => 'Gasolina',
                'consumo' => '11.9 l/100 km',
            ],
            'mercedes_s450' => [
                'nome' => 'Mercedes S450',
                'imagem' => '@web/imagens/mercedesS450.jpg',
                'motor' => 'Em linha 6, 2999 cm³',
                'potencia' => '362 HP / 367 PS / 270 kW',
                'aceleracao' => '5.1 segundos',
                'preco' => '€80.000',
                'tipo de combustivel' => 'Gasolina',
                'consumo' => '6.6-6.6 l/100 km',
            ],
            'mercedes_s350d' => [
                'nome' => 'Mercedes S350D',
                'imagem' => '@web/imagens/mercedesS350D.jpg',
                'motor' => 'V6, 2987 cm³',
                'potencia' => '258 HP / 190 kW',
                'aceleracao' => '6.5 segundos',
                'preco' => '€36,000',
                'ano' => '2013', 
                'tipo de combustivel' => 'Diesel',
                'consumo' => '6.3 l/100 km',
            ],
        ];

        if (isset($modelos[$id])) {
            return $this->render('details', ['modelo' => $modelos[$id]]);
        } else {
            throw new \yii\web\NotFoundHttpException('Modelo não encontrado.');
        }
    }

    public function actionModelo2()
    {
        $modelos = [
            // Lista de modelos para a página 2
            [
                'id' => 'mercedes_a45AMG',
                'nome' => 'Mercedes A45 AMG S 4Matic',
                'imagem' => '@web/imagens/mercedesa45amg.jpg',
                'motor' => '1991 cm³, Inline 4',
                'potencia' => '421 cv',
                'aceleracao' => '3.9 segundos',
                'preco' => '€86.000',
            ],
            [
                'id' => 'mercedes_a180cdi',
                'nome' => 'Mercedes A 180 CDI (BlueEFFICIENCY)',
                'imagem' => '@web/imagens/mercedesa180cdi.jpg',
                'motor' => '1461 cm³, Inline 4',
                'potencia' => '109 cv',
                'aceleracao' => '11.3 segundos',
                'preco' => '€12.900',
            ],
            [
                'id' => 'mercedes_a160',
                'nome' => 'Mercedes A 160 Style',
                'imagem' => '@web/imagens/mercedesa160.jpg',
                'motor' => '1598 cm³, Inline 4',
                'potencia' => '101 cv',
                'aceleracao' => '10.8 segundos',
                'preco' => '€25.450',
            ],
            [
                'id' => 'mercedes_a180damg',
                'nome' => 'Mercedes A 180 d AMG Line Aut',
                'imagem' => '@web/imagens/mercedesa180line.jpg',
                'motor' => '1461 cm³, Inline 4',
                'potencia' => '116 cv',
                'aceleracao' => '10.5 segundos',
                'preco' => '€41.500',
            ],
            [
                'id' => 'mercedes_a180durban',
                'nome' => 'Mercedes A 180 d Urban',
                'imagem' => '@web/imagens/mercedesa180durban.jpg',
                'motor' => '1461 cm³, Inline 4',
                'potencia' => '109 cv',
                'aceleracao' => '11.3 segundos',
                'preco' => '€18.500',
            ],
            [
                'id' => 'mercedes_a180limousine',
                'nome' => 'Mercedes A 180 Limousine d Style Plus Aut',
                'imagem' => '@web/imagens/mercedesa180limousine.jpg',
                'motor' => '1461 cm³, Inline 4',
                'potencia' => '116 cv',
                'aceleracao' => '10.5 segundos',
                'preco' => '€34.990',
            ],
        ];

        return $this->render('modelo2', ['modelos' => $modelos]);
    }

    public function actionDetails2($id)
    {
        $modelos = [
            'mercedes_a45AMG' => [
                'nome' => 'Mercedes A45 AMG S 4Matic',
                'imagem' => '@web/imagens/mercedesa45amg.jpg',
                'motor' => '1991 cm³, Inline 4',
                'potencia' => '421 cv',
                'aceleracao' => '3.9 segundos',
                'preco' => '€86.000',
                'ano' => '2019', 
                'tipo de combustivel' => 'Gasolina',
                'consumo' => '8.9 l/100 km',
            ],
            'mercedes_a180cdi' => [
                'nome' => 'Mercedes A 180 CDI (BlueEFFICIENCY)',
                'imagem' => '@web/imagens/mercedesa180cdi.jpg',
                'motor' => '1461 cm³, Inline 4',
                'potencia' => '109 cv',
                'aceleracao' => '11.3 segundos',
                'preco' => '€12.900',
                'ano' => '2013', 
                'tipo de combustivel' => 'Diesel',
                'consumo' => '3.5 l/100 km',
            ],
            'mercedes_a160' => [
                'nome' => 'Mercedes A 160 Style',
                'imagem' => '@web/imagens/mercedesa160.jpg',
                'motor' => '1598 cm³, Inline 4',
                'potencia' => '101 cv',
                'aceleracao' => '10.8 segundos',
                'preco' => '€25.450',
                'ano' => '2015', 
                'tipo de combustivel' => 'Gasolina',
                'consumo' => '5.6 l/100 km',
            ],
            'mercedes_a180damg' => [
                'nome' => 'Mercedes A 180 d AMG Line Aut',
                'imagem' => '@web/imagens/mercedesa180line.jpg',
                'motor' => '1461 cm³, Inline 4',
                'potencia' => '116 cv',
                'aceleracao' => '10.5 segundos',
                'preco' => '€41.500',
                'ano' => '2023', 
                'tipo de combustivel' => 'Gasolina',
                'consumo' => '4.1 l/100 km',
            ],
            'mercedes_a180durban' => [
                'nome' => 'Mercedes A 180 d Urban',
                'imagem' => '@web/imagens/mercedesa180durban.jpg',
                'motor' => '1461 cm³, Inline 4',
                'potencia' => '109 cv',
                'aceleracao' => '11.3 segundos',
                'preco' => '€18.500',
                'ano' => '2017', 
                'tipo de combustivel' => 'Diesel',
                'consumo' => '3.7 l/100 km',
            ],
            'mercedes_a180limousine' => [
                'nome' => 'Mercedes A 180 Limousine d Style Plus Aut',
                'imagem' => '@web/imagens/mercedesa180limousine.jpg',
                'motor' => '1461 cm³, Inline 4',
                'potencia' => '116 cv',
                'aceleracao' => '10.5 segundos',
                'preco' => '€34.990',
                'ano' => '2020', 
                'tipo de combustivel' => 'Diesel',
                'consumo' => '4.1 l/100 km',
            ],
        ];

        if (isset($modelos[$id])) {
            return $this->render('details2', ['modelo' => $modelos[$id]]);
        } else {
            throw new \yii\web\NotFoundHttpException('Modelo não encontrado.');
        }
    }

    public function actionModelo3()
    {
        $modelos = [
            [
                'id' => 'mercedes_b180',
                'nome' => 'Mercedes B 180',
                'imagem' => '@web/imagens/mercedesb180.jpg',
                'motor' => '1595 cm³, Inline 4',
                'potencia' => '122 cv',
                'aceleracao' => '8.6 segundos',
                'preco' => '€27.000',
            ],
            [
                'id' => 'mercedes_b200',
                'nome' => 'Mercedes B 200',
                'imagem' => '@web/imagens/mercedesb200.jpg',
                'motor' => '1332 cm³, Inline 4',
                'potencia' => '163 cv',
                'aceleracao' => '8.2 segundos',
                'preco' => '€31.500',
            ],
            [
                'id' => 'mercedes_b220',
                'nome' => 'Mercedes B 220 4MATIC',
                'imagem' => '@web/imagens/mercedesb220.jpg',
                'motor' => '1991 cm³, Inline 4',
                'potencia' => '184 cv',
                'aceleracao' => '7.1 segundos',
                'preco' => '€37.000',
            ],
            [
                'id' => 'mercedes_b250',
                'nome' => 'Mercedes B 250',
                'imagem' => '@web/imagens/mercedesb250.jpg',
                'motor' => '1991 cm³, Inline 4',
                'potencia' => '211 cv',
                'aceleracao' => '6.5 segundos',
                'preco' => '€40.000',
            ],
            [
                'id' => 'mercedes_b180d',
                'nome' => 'Mercedes B 180 d',
                'imagem' => '@web/imagens/mercedesb180d.jpg',
                'motor' => '1461 cm³, Inline 4',
                'potencia' => '109 cv',
                'aceleracao' => '11.3 segundos',
                'preco' => '€32.000',
            ],
            [
                'id' => 'mercedes_b200d',
                'nome' => 'Mercedes B 200 d',
                'imagem' => '@web/imagens/mercedesb200d.jpg',
                'motor' => '1950 cm³, Inline 4',
                'potencia' => '150 cv',
                'aceleracao' => '8.3 segundos',
                'preco' => '€35.500',
            ]
            
        ];

        return $this->render('modelo3', ['modelos' => $modelos]);
    }

    public function actionDetails3($id)
    {
        $modelos = [
            'mercedes_b180' => [
                'nome' => 'Mercedes B 180',
                'imagem' => '@web/imagens/mercedesb180.jpg',
                'motor' => '1595 cm³, Inline 4',
                'potencia' => '122 cv',
                'aceleracao' => '8.6 segundos',
                'preco' => '€27.000',
                'ano' => '2014',
                'tipo de combustivel' => 'Gasolina',
                'consumo' => '6.8 l/100km',
            ],
            'mercedes_b200' => [
                'nome' => 'Mercedes B 200',
                'imagem' => '@web/imagens/mercedesb200.jpg',
                'motor' => '1332 cm³, Inline 4',
                'potencia' => '163 cv',
                'aceleracao' => '8.2 segundos',
                'preco' => '€31.500',
                'ano' => '2019',
                'tipo de combustivel' => 'Gasolina',
                'consumo' => '6.2 l/100km',
            ],
            'mercedes_b220' => [
                'nome' => 'Mercedes B 220 4MATIC',
                'imagem' => '@web/imagens/mercedesb220.jpg',
                'motor' => '1991 cm³, Inline 4',
                'potencia' => '184 cv',
                'aceleracao' => '7.1 segundos',
                'preco' => '€37.000',
                'ano' => '2013',
                'tipo de combustivel' => 'Gasolina',
                'consumo' => '7.1 l/100km',
            ],
            'mercedes_b250' => [
                'nome' => 'Mercedes B 250',
                'imagem' => '@web/imagens/mercedesb250.jpg',
                'motor' => '1991 cm³, Inline 4',
                'potencia' => '211 cv',
                'aceleracao' => '6.5 segundos',
                'preco' => '€40.000',
                'ano' => '2021',
                'tipo de combustivel' => 'Gasolina',
                'consumo' => '6.5 l/100km',
            ],
            'mercedes_b180d' => [
                'nome' => 'Mercedes B 180 d',
                'imagem' => '@web/imagens/mercedesb180d.jpg',
                'motor' => '1461 cm³, Inline 4',
                'potencia' => '109 cv',
                'aceleracao' => '11.3 segundos',
                'preco' => '€32.000',
                'ano' => '2022',
                'tipo de combustivel' => 'Diesel',
                'consumo' => '4.4 l/100km',
            ],
            'mercedes_b200d' => [
                'nome' => 'Mercedes B 200 d',
                'imagem' => '@web/imagens/mercedesb200d.jpg',
                'motor' => '1950 cm³, Inline 4',
                'potencia' => '150 cv',
                'aceleracao' => '8.3 segundos',
                'preco' => '€35.500',
                'ano' => '2024',
                'tipo de combustivel' => 'Diesel',
                'consumo' => '4.4 l/100km',
            ],
        ];

        if (isset($modelos[$id])) {
            return $this->render('details3', ['modelo' => $modelos[$id]]);
        } else {
            throw new \yii\web\NotFoundHttpException('Modelo não encontrado.');
        }
    }

    public function actionModelo4()
    {
        $modelos = [
            [
                'id' => 'mercedes_c200',
                'nome' => 'Mercedes C 200',
                'imagem' => '@web/imagens/mercedesc200.jpg',
                'motor' => '1.5 Hibrido',
                'potencia' => '184+14 cv',
                'aceleracao' => '7.7 segundos',
                'preco' => '€46.450',
            ],
            [
                'id' => 'mercedes_c220d',
                'nome' => 'Mercedes C 220d',
                'imagem' => '@web/imagens/mercedesc220d.jpg',
                'motor' => '2.0',
                'potencia' => '194 cv',
                'aceleracao' => '7.0 segundos',
                'preco' => '€49.950',
            ],
            [
                'id' => 'mercedes_c300e',
                'nome' => 'Mercedes C 300 e',
                'imagem' => '@web/imagens/mercedesc300e.jpg',
                'motor' => 'Hibrido Enchufable',
                'potencia' => '258 cv',
                'aceleracao' => '6.2 segundos',
                'preco' => '€52.000',
            ],
            [
                'id' => 'mercedes_c300d',
                'nome' => 'Mercedes C 300d',
                'imagem' => '@web/imagens/mercedesc300d.jpg',
                'motor' => '2.0 Diesel',
                'potencia' => '245 cv',
                'aceleracao' => '6.9 segundos',
                'preco' => '€55.000',
            ],
            [
                'id' => 'mercedes_c350e',
                'nome' => 'Mercedes C 350 e',
                'imagem' => '@web/imagens/mercedesc350e.jpg',
                'motor' => 'Hibrido Enchufable',
                'potencia' => '275 cv',
                'aceleracao' => '6.0 segundos',
                'preco' => '€60.000',
            ],
            [
                'id' => 'mercedes_c400',
                'nome' => 'Mercedes C 400',
                'imagem' => '@web/imagens/mercedesc400.jpg',
                'motor' => '3.0 V6',
                'potencia' => '333 cv',
                'aceleracao' => '5.2 segundos',
                'preco' => '€65.000',
            ]
            
        ];

        return $this->render('modelo4', ['modelos' => $modelos]);
    }

    public function actionDetails4($id)
    {
        $modelos = [
            'mercedes_c200' => [
                'nome' => 'Mercedes C 200',
                'imagem' => '@web/imagens/mercedesc200.jpg',
                'motor' => '1.5 Hibrido',
                'potencia' => '184+14 cv',
                'aceleracao' => '7.7 segundos',
                'preco' => '€46.450',
                'ano' => '2019',
                'tipo de combustivel' => 'Hibrido',
                'consumo' => '5.6 l/100km',
            ],
            'mercedes_c220d' => [
                'nome' => 'Mercedes C 220d',
                'imagem' => '@web/imagens/mercedesc220d.jpg',
                'motor' => '2.0',
                'potencia' => '194 cv',
                'aceleracao' => '7.0 segundos',
                'preco' => '€49.950',
                'ano' => '2022',
                'tipo de combustivel' => 'Diesel',
                'consumo' => '4.8 l/100km',
            ],
            'mercedes_c300e' => [
                'nome' => 'Mercedes C 300 e',
                'imagem' => '@web/imagens/mercedesc300e.jpg',
                'motor' => 'Hibrido Enchufable',
                'potencia' => '258 cv',
                'aceleracao' => '6.2 segundos',
                'preco' => '€52.000',
                'ano' => '2021',
                'tipo de combustivel' => 'Hibrido',
                'consumo' => '2.1 l/100km',
            ],        
            'mercedes_c300d' => [
                'nome' => 'Mercedes C 300d',
                'imagem' => '@web/imagens/mercedesc300d.jpg',
                'motor' => '2.0 Diesel',
                'potencia' => '245 cv',
                'aceleracao' => '6.9 segundos',
                'preco' => '€55.000',
                'ano' => '2019',
                'tipo de combustivel' => 'Diesel',
                'consumo' => '4.5 l/100km',
            ],
            'mercedes_c350e' => [
                'nome' => 'Mercedes C 350 e',
                'imagem' => '@web/imagens/mercedesc350e.jpg',
                'motor' => 'Hibrido Enchufable',
                'potencia' => '275 cv',
                'aceleracao' => '6.0 segundos',
                'preco' => '€60.000',
                'ano' => '2017',
                'tipo de combustivel' => 'Hibrido',
                'consumo' => '2.0 l/100km',
            ],
            'mercedes_c400' => [
                'nome' => 'Mercedes C 400',
                'imagem' => '@web/imagens/mercedesc400.jpg',
                'motor' => '3.0 V6',
                'potencia' => '333 cv',
                'aceleracao' => '5.2 segundos',
                'preco' => '€65.000',
                'ano' => '2021',
                'tipo de combustivel' => 'Gasolina',
                'consumo' => '8.0 l/100km',
            ],
        ];

        if (isset($modelos[$id])) {
            return $this->render('details4', ['modelo' => $modelos[$id]]);
        } else {
            throw new \yii\web\NotFoundHttpException('Modelo não encontrado.');
        }
    }

    public function actionModelo5()
    {
        $modelos = [
            [
                'id' => 'mercedes_e200',
                'nome' => 'Mercedes E 200',
                'imagem' => '@web/imagens/mercedese200.jpg',
                'motor' => '2.0L, Inline 4',
                'potencia' => '313 cv',
                'aceleracao' => '7.5–6.4 segundos',
                'preco' => '€63,900',
            ],
            [
                'id' => 'mercedes_e300',
                'nome' => 'Mercedes E 300',
                'imagem' => '@web/imagens/mercedese300.jpg',
                'motor' => '2.0L, Inline 4',
                'potencia' => '313 cv',
                'aceleracao' => '7.5–6.4 segundos',
                'preco' => '€63,900',
            ],
            [
                'id' => 'mercedes_e220d',
                'nome' => 'Mercedes E 220d',
                'imagem' => '@web/imagens/mercedese220d.jpg',
                'motor' => '2.0L, Inline 4',
                'potencia' => '190 cv',
                'aceleracao' => '7.5–6.4 segundos',
                'preco' => '€42,350',
            ],
            [
                'id' => 'mercedes_e350',
                'nome' => 'Mercedes E 350',
                'imagem' => '@web/imagens/mercedese350.jpg',
                'motor' => '2.0L, Inline 4',
                'potencia' => '313 cv',
                'aceleracao' => '7.5–6.4 segundos',
                'preco' => '€73,900',
            ],
            [
                'id' => 'mercedes_e400',
                'nome' => 'Mercedes E 400',
                'imagem' => '@web/imagens/mercedese400.jpg',
                'motor' => '3.0L, V6',
                'potencia' => '333 cv',
                'aceleracao' => '5.2 segundos',
                'preco' => '€83,900',
            ],
            [
                'id' => 'mercedes_e450',
                'nome' => 'Mercedes E 450',
                'imagem' => '@web/imagens/mercedese450.jpg',
                'motor' => '3.0L, Inline 6',
                'potencia' => '367 cv',
                'aceleracao' => '5.0 segundos',
                'preco' => '€93,900',
            ]
            
        ];

        return $this->render('modelo5', ['modelos' => $modelos]);
    }

    public function actionDetails5($id)
    {
        $modelos = [
            'mercedes_e200' => [
                'nome' => 'Mercedes E 200',
                'imagem' => '@web/imagens/mercedese200.jpg',
                'motor' => '2.0L, Inline 4',
                'potencia' => '313 cv',
                'aceleracao' => '7.5–6.4 segundos',
                'preco' => '€63,900',
                'ano' => '2019',
                'tipo de combustivel' => 'Gasolina (MHEV)',
                'consumo' => '6.4-0,5 litros/100km',
            ],
            'mercedes_e300' => [
                'nome' => 'Mercedes E 300',
                'imagem' => '@web/imagens/mercedese300.jpg',
                'motor' => '2.0L, Inline 4',
                'potencia' => '313 cv',
                'aceleracao' => '7.5–6.4 segundos',
                'preco' => '€63,900',
                'ano' => '2017',
                'tipo de combustivel' => 'Gasolina (PHEV)',
                'consumo' => '0,8-0,5 litros/100km',
            ],
            'mercedes_e220d' => [
                'nome' => 'Mercedes E 220d',
                'imagem' => '@web/imagens/mercedese220d.jpg',
                'motor' => '2.0L, Inline 4',
                'potencia' => '190 cv',
                'aceleracao' => '7.5–6.4 segundos',
                'preco' => '€42,350',
                'ano' => '2023',
                'tipo de combustivel' => 'Diesel (MHEV)',
                'consumo' => '6.4-0,5 litros/100km',
            ],
            'mercedes_e350' => [
        'nome' => 'Mercedes E 350',
        'imagem' => '@web/imagens/mercedese350.jpg',
        'motor' => '2.0L, Inline 4',
        'potencia' => '313 cv',
        'aceleracao' => '7.5–6.4 segundos',
        'preco' => '€73,900',
        'ano' => '2021',
        'tipo de combustivel' => 'Gasolina (MHEV)',
        'consumo' => '6.4-0,5 litros/100km',
    ],
    'mercedes_e400' => [
        'nome' => 'Mercedes E 400',
        'imagem' => '@web/imagens/mercedese400.jpg',
        'motor' => '3.0L, V6',
        'potencia' => '333 cv',
        'aceleracao' => '5.2 segundos',
        'preco' => '€83,900',
        'ano' => '2018',
        'tipo de combustivel' => 'Gasolina',
        'consumo' => '8.4 litros/100km',
    ],
    'mercedes_e450' => [
        'nome' => 'Mercedes E 450',
        'imagem' => '@web/imagens/mercedese450.jpg',
        'motor' => '3.0L, Inline 6',
        'potencia' => '367 cv',
        'aceleracao' => '5.0 segundos',
        'preco' => '€93,900',
        'ano' => '2022',
        'tipo de combustivel' => 'Gasolina (MHEV)',
        'consumo' => '8.1 litros/100km',
    ],
        ];

        if (isset($modelos[$id])) {
            return $this->render('details5', ['modelo' => $modelos[$id]]);
        } else {
            throw new \yii\web\NotFoundHttpException('Modelo não encontrado.');
        }
    }
}
