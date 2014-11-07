<?php
/* @var $this CitaController */
/* @var $model Cita */

$this->breadcrumbs=array(
	'Citas'=>array('index'),
	$model->id_cita,
);

$this->menu=array(
	array('label'=>'List Cita', 'url'=>array('index')),
	array('label'=>'Create Cita', 'url'=>array('create')),
	array('label'=>'Update Cita', 'url'=>array('update', 'id'=>$model->id_cita)),
	array('label'=>'Delete Cita', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_cita),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Cita', 'url'=>array('admin')),
);
?>

<h1>View Cita #<?php echo $model->id_cita; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_cita',
		'rut_paciente',
		'estado_cita',
		'fecha',
		'id_bloque',
	),
)); ?>
