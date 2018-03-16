<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model app\models\EntRespuestas */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ent-respuestas-form">

    <?php if($model->isNewRecord){ 
        $form = ActiveForm::begin([
            'action' => ['respuestas/create']
        ]);
    }else{
        $form = ActiveForm::begin([
            'action' => ['respuestas/update?id='.$model->id_pregunta]
        ]);
    }
    ?>

    <?= $form->field($model, 'id_pregunta')->hiddenInput(['maxlength' => true, 'value' => $idPreg])->label(false) ?>

    <?= $form->field($model, 'txt_respuesta')->textInput(['maxlength' => true]) ?>

    <?php $form->field($model, 'b_habilitado')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
