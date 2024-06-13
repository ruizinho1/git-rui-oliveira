<?php
// models/mercedesmodels.php

namespace app\models;
use yii;
use yii\db\ActiveRecord;
use yii\web\UploadedFile;

class MercedesModels extends ActiveRecord
{
    public $imageFile;

    public static function tableName()
    {
        return 'mercedes_models';
    }

    public function rules()
    {
        return [
            [['nome', 'motor', 'potencia', 'acelaracao', 'preco', 'ano', 'tipo_combustivel', 'consumo'], 'required'],
            [['preco'], 'number'],
            [['ano'], 'integer'],
            [['imageFile'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg'],
            [['image'], 'string', 'max' => 255],
        ];
    }

    public function getImageUrl()
    {
        return Yii::getAlias('@web') . '/' . $this->image;
    }

    public function upload()
    {
        if ($this->validate()) {
            $filePath = 'uploads/' . $this->imageFile->baseName . '.' . $this->imageFile->extension;
            $this->imageFile->saveAs($filePath);
            $this->image = $filePath;
            return true;
        } else {
            return false;
        }
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nome' => 'Nome',
            'motor' => 'Motor',
            'potencia' => 'Potência',
            'acelaracao' => 'Aceleração',
            'preco' => 'Preço',
            'image' => 'Imagem', // Corrigido para 'image'
            'ano' => 'Ano',
            'tipo_combustivel' => 'Tipo de Combustível',
            'consumo' => 'Consumo',
        ];
    }

    public function loadModel($id)
    {
        $model = static::findOne($id);
        if ($model) {
            $model->imageFile = UploadedFile::getInstance($model, 'imageFile');
            return $model;
        }
        return null;
    }
}
