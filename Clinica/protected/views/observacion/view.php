<?php
/* @var $this ObservacionController */
/* @var $model Observacion */

$this->breadcrumbs=array(
	'Observacions'=>array('index'),
	$model->id_observacion,
);

$this->menu=array(
	array('label'=>'List Observacion', 'url'=>array('index')),
	array('label'=>'Create Observacion', 'url'=>array('create')),
	array('label'=>'Update Observacion', 'url'=>array('update', 'id'=>$model->id_observacion)),
	array('label'=>'Delete Observacion', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_observacion),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Observacion', 'url'=>array('admin')),
);
?>

<h1>View Observacion #<?php echo $model->id_observacion; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_observacion',
		'id_pieza_paciente',
		'observacion',
	),
)); ?>
