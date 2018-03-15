<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cat_clientes".
 *
 * @property string $id_cliente
 * @property string $txt_nombre
 * @property int $b_habilitado
 *
 * @property CatCuestionarios[] $catCuestionarios
 */
class CatClientes extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cat_clientes';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['txt_nombre'], 'required'],
            [['b_habilitado'], 'integer'],
            [['txt_nombre'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_cliente' => 'Id Cliente',
            'txt_nombre' => 'Txt Nombre',
            'b_habilitado' => 'B Habilitado',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCatCuestionarios()
    {
        return $this->hasMany(CatCuestionarios::className(), ['id_cliente' => 'id_cliente']);
    }
}
