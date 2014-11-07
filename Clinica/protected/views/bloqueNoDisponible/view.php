<?php
/* @var $this BloqueNoDisponibleController */
/* @var $model BloqueNoDisponible */

$this->breadcrumbs=array(
	'Bloque No Disponibles'=>array('index'),
	$model->id_no_disponible,
);

$this->menu=array(
	array('label'=>'List BloqueNoDisponible', 'url'=>array('index')),
	array('label'=>'Create BloqueNoDisponible', 'url'=>array('create')),
	array('label'=>'Update BloqueNoDisponible', 'url'=>array('update', 'id'=>$model->id_no_disponible)),
	array('label'=>'Delete BloqueNoDisponible', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_no_disponible),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage BloqueNoDisponible', 'url'=>array('admin')),
);
?>

<h1>View BloqueNoDisponible #<?php echo $model->id_no_disponible; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_no_disponible',
		'fecha',
		'id_bloque',
	),
)); ?>
