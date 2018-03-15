<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\models\CatCuestionarios;

/* @var $this yii\web\View */
/* @var $searchModel app\models\EntPreguntasSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Preguntas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ent-preguntas-index">

    <h1><?php Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Crear pregunta', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id_pregunta',
            'txt_pregunta:ntext',
            //'id_cuestionario',
            [
                'attribute'=>'id_cuestionario',
                'format'=>'raw',
                'value'=>function($data){
                    $cuest = $data->cuestionario;
                    return $cuest->txt_nombre;
                }
            ],
            //'id_tipo',
            [
                'attribute'=>'id_tipo',
                'format'=>'raw',
                'value'=>function($data){
                    $tipo = $data->tipo;
                    return $tipo->txt_nombre;
                }
            ],
            //'b_halitado',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
