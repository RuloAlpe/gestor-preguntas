<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\EntRespuestasSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ent Respuestas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ent-respuestas-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Ent Respuestas', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_respuesta',
            'id_pregunta',
            'txt_respuesta',
            'b_habilitado',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
