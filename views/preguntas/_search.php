<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\EntPreguntasSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ent-preguntas-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_pregunta') ?>

    <?= $form->field($model, 'id_cuestionario') ?>

    <?= $form->field($model, 'id_tipo') ?>

    <?= $form->field($model, 'txt_pregunta') ?>

    <?= $form->field($model, 'b_halitado') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
