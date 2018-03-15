<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\CatCuestionarios;
use yii\helpers\ArrayHelper;
use app\models\CatTipoPreguntas;

/* @var $this yii\web\View */
/* @var $model app\models\EntPreguntas */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ent-preguntas-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_cuestionario')->dropDownList(ArrayHelper::map(CatCuestionarios::find()->where(['b_habilitado'=>1])->all(), 'id_cuestionario', 'txt_nombre'), ['prompt'=>'Seleccionar cuestionario']) ?>

    <?= $form->field($model, 'id_tipo')->dropDownList(ArrayHelper::map(CatTipoPreguntas::find()->where(['b_habilitado'=>1])->all(), 'id_tipo', 'txt_nombre'), ['prompt'=>'Seleccionar tipo de pregunta']) ?>

    <?= $form->field($model, 'txt_pregunta')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
