<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cat_cuestionarios".
 *
 * @property string $id_cuestionario
 * @property string $id_cliente
 * @property string $txt_nombre
 * @property string $b_habilitado
 *
 * @property CatClientes $cliente
 * @property EntPreguntas[] $entPreguntas
 */
class CatCuestionarios extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cat_cuestionarios';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_cliente', 'txt_nombre'], 'required'],
            [['id_cliente', 'b_habilitado'], 'integer'],
            [['txt_nombre'], 'string', 'max' => 200],
            [['id_cliente'], 'exist', 'skipOnError' => true, 'targetClass' => CatClientes::className(), 'targetAttribute' => ['id_cliente' => 'id_cliente']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_cuestionario' => 'Id Cuestionario',
            'id_cliente' => 'Id Cliente',
            'txt_nombre' => 'Txt Nombre',
            'b_habilitado' => 'B Habilitado',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCliente()
    {
        return $this->hasOne(CatClientes::className(), ['id_cliente' => 'id_cliente']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEntPreguntas()
    {
        return $this->hasMany(EntPreguntas::className(), ['id_cuestionario' => 'id_cuestionario']);
    }
}
