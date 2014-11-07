<?php
/* @var $this TratamientoRealizadoController */
/* @var $model TratamientoRealizado */

$this->breadcrumbs=array(
	'Tratamiento Realizados'=>array('index'),
	$model->id_realizado,
);

$this->menu=array(
	array('label'=>'Volver a tratamientos', 'url'=>array('Atencion/tratamientos', 'id'=>$model->id_atencion)),
);
?>

<h1>Detalle Tratamiento</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'id_realizado',
		//'id_atencion',
		//'id_tratamiento',
		'comentario',
	),
)); ?>

<?php
//$tieneTratamiento = TieneTratamiento::model()->findByAttributes(array('id_realizado' => $model->id_realizado));
$pieza = new Pieza();
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'PiezasAfectadas',
    'dataProvider' => $modelTieneTratamiento->searchByTratamientoRealizado($model->id_realizado),
    'filter' => $modelTieneTratamiento,
    'columns' => array(
        'comentario',
        array(
                        'name'=>'pieza',
                        'value'=>'$data->idPiezaPaciente->idPieza->nombre_pieza', 
                        'type'=>'text',
                ),
    ),
));
?>
