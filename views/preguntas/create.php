<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\EntPreguntas */

$this->title = 'Create Ent Preguntas';
$this->params['breadcrumbs'][] = ['label' => 'Ent Preguntas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ent-preguntas-create">

    <h1><?php Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
