<?php
/* @var $this DiaNoDisponibleController */
/* @var $model DiaNoDisponible */

$this->breadcrumbs=array(
	'Dia No Disponibles'=>array('index'),
	$model->id_dia_no_disponible,
);

$this->menu=array(
	array('label'=>'List DiaNoDisponible', 'url'=>array('index')),
	array('label'=>'Create DiaNoDisponible', 'url'=>array('create')),
	array('label'=>'Update DiaNoDisponible', 'url'=>array('update', 'id'=>$model->id_dia_no_disponible)),
	array('label'=>'Delete DiaNoDisponible', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_dia_no_disponible),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage DiaNoDisponible', 'url'=>array('admin')),
);
?>

<h1>View DiaNoDisponible #<?php echo $model->id_dia_no_disponible; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_dia_no_disponible',
		'fecha',
		'id_dia',
	),
)); ?>
