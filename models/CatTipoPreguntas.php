<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cat_tipo_preguntas".
 *
 * @property string $id_tipo
 * @property string $txt_nombre
 * @property string $b_habilitado
 *
 * @property EntPreguntas[] $entPreguntas
 */
class CatTipoPreguntas extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cat_tipo_preguntas';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['txt_nombre'], 'required'],
            [['b_habilitado'], 'integer'],
            [['txt_nombre'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_tipo' => 'Id Tipo',
            'txt_nombre' => 'Txt Nombre',
            'b_habilitado' => 'B Habilitado',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEntPreguntas()
    {
        return $this->hasMany(EntPreguntas::className(), ['id_tipo' => 'id_tipo']);
    }
}
