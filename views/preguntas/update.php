<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\EntPreguntas */

$this->title = 'Update Ent Preguntas: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Ent Preguntas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_pregunta, 'url' => ['view', 'id' => $model->id_pregunta]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ent-preguntas-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
