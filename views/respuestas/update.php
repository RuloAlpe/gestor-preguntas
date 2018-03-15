<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\EntRespuestas */

$this->title = 'Update Ent Respuestas: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Ent Respuestas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_respuesta, 'url' => ['view', 'id' => $model->id_respuesta]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ent-respuestas-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
