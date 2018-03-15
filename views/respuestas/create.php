<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\EntRespuestas */

$this->title = 'Create Ent Respuestas';
$this->params['breadcrumbs'][] = ['label' => 'Ent Respuestas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ent-respuestas-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
