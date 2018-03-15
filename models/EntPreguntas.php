<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ent_preguntas".
 *
 * @property string $id_pregunta
 * @property string $id_cuestionario
 * @property string $id_tipo
 * @property string $txt_pregunta
 * @property string $b_halitado
 *
 * @property CatCuestionarios $cuestionario
 * @property CatTipoPreguntas $tipo
 * @property EntRespuestas[] $entRespuestas
 * @property RelUsuarioRespuestas[] $relUsuarioRespuestas
 */
class EntPreguntas extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ent_preguntas';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_cuestionario', 'id_tipo', 'txt_pregunta'], 'required'],
            [['id_cuestionario', 'id_tipo', 'b_halitado'], 'integer'],
            [['txt_pregunta'], 'string'],
            [['id_cuestionario'], 'exist', 'skipOnError' => true, 'targetClass' => CatCuestionarios::className(), 'targetAttribute' => ['id_cuestionario' => 'id_cuestionario']],
            [['id_tipo'], 'exist', 'skipOnError' => true, 'targetClass' => CatTipoPreguntas::className(), 'targetAttribute' => ['id_tipo' => 'id_tipo']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_pregunta' => 'Id Pregunta',
            'id_cuestionario' => 'Cuestionario',
            'id_tipo' => 'Tipo',
            'txt_pregunta' => 'Pregunta',
            'b_halitado' => 'B Halitado',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCuestionario()
    {
        return $this->hasOne(CatCuestionarios::className(), ['id_cuestionario' => 'id_cuestionario']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTipo()
    {
        return $this->hasOne(CatTipoPreguntas::className(), ['id_tipo' => 'id_tipo']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEntRespuestas()
    {
        return $this->hasMany(EntRespuestas::className(), ['id_pregunta' => 'id_pregunta']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRelUsuarioRespuestas()
    {
        return $this->hasMany(RelUsuarioRespuestas::className(), ['id_pregunta' => 'id_pregunta']);
    }
}
