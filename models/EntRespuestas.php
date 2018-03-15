<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ent_respuestas".
 *
 * @property string $id_respuesta
 * @property string $id_pregunta
 * @property string $txt_respuesta
 * @property string $b_habilitado
 *
 * @property EntPreguntas $pregunta
 * @property RelUsuarioRespuestas[] $relUsuarioRespuestas
 */
class EntRespuestas extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ent_respuestas';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_pregunta', 'txt_respuesta'], 'required'],
            [['id_pregunta', 'b_habilitado'], 'integer'],
            [['txt_respuesta'], 'string', 'max' => 200],
            [['id_pregunta'], 'exist', 'skipOnError' => true, 'targetClass' => EntPreguntas::className(), 'targetAttribute' => ['id_pregunta' => 'id_pregunta']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_respuesta' => 'Id Respuesta',
            'id_pregunta' => 'Id Pregunta',
            'txt_respuesta' => 'Txt Respuesta',
            'b_habilitado' => 'B Habilitado',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPregunta()
    {
        return $this->hasOne(EntPreguntas::className(), ['id_pregunta' => 'id_pregunta']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRelUsuarioRespuestas()
    {
        return $this->hasMany(RelUsuarioRespuestas::className(), ['id_respuesta' => 'id_respuesta']);
    }
}
