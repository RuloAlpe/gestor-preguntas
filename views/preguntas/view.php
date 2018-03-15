<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $model app\models\EntPreguntas */

$this->title = $model->id_pregunta;
//$this->params['breadcrumbs'][] = ['label' => 'Ent Preguntas', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ent-preguntas-view">

    <h1><?php Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_pregunta], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_pregunta], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id_pregunta',
            //'id_cuestionario',
            [
                'label' => 'Cuestionario',
                'value' => function($data){
                    $cuest = $data->cuestionario;
                    return $cuest->txt_nombre;
                }
            ],
            //'id_tipo',
            [
                'label' => 'Tipo de pregunta',
                'value' => function($data){
                    $tipo = $data->tipo;
                    return $tipo->txt_nombre;
                }
            ],
            'txt_pregunta:ntext',
            //'b_halitado',
        ],
    ]) ?>

    <?php if($model->id_tipo == 2){ ?> 

        <p>
            <?= Html::a('Crear respuestas', ['create'], ['class' => 'btn btn-success', 'data-toggle' => 'modal', 'data-target' => '#myModal']) ?>
        </p>

        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],

                //'id_respuesta',
                //'id_pregunta',
                'txt_respuesta',
                //'b_habilitado',

                ['class' => 'yii\grid\ActionColumn'],
            ],
        ]); ?>
    
    <?php } ?>

</div>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Modal Header</h4>
            </div>
            <div class="modal-body">
                <?= $this->render('//respuestas/_form', [
                    'idPreg' => $model->id_pregunta,
                    'model' => $respuesta,
                ]) ?>
            </div>
        </div>
    </div>
</div>