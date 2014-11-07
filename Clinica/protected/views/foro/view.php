<?php
/* @var $this ForoController */
/* @var $model Foro */

$this->breadcrumbs=array(
	'Foros'=>array('index'),
	$model->id_foro,
);

$this->menu=array(
	array('label'=>'List Foro', 'url'=>array('index')),
	array('label'=>'Create Foro', 'url'=>array('create')),
	array('label'=>'Update Foro', 'url'=>array('update', 'id'=>$model->id_foro)),
	array('label'=>'Delete Foro', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_foro),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Foro', 'url'=>array('admin')),
);
?>

<h1>View Foro #<?php echo $model->id_foro; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_foro',
		'rut_consultante',
		'correo_consultante',
		'fecha_consulta',
		'pregunta',
		'respuesta',
		'estado_consulta',
	),
)); ?>
