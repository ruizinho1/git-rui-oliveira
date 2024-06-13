<?php

namespace app\controllers;

use yii\web\Controller;
use app\models\MercedesModels; // Importe o modelo MercedesModels

class MercedesController extends Controller
{
    public function actionModelo1()
    {
        // Busca todos os modelos Mercedes do banco de dados
        $modelos = MercedesModels::find()->all();

        return $this->render('modelo1', ['modelos' => $modelos]);
    }

    public function actionDetails($id)
    {
        $modelo = MercedesModels::findOne($id);

        if ($modelo === null) {
            throw new NotFoundHttpException('O modelo Mercedes não foi encontrado.');
        }

        return $this->render('details', ['modelo' => $modelo]);
    }
}

