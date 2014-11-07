<?php
/* @var $this TieneTratamientoController */
/* @var $model TieneTratamiento */

$this->breadcrumbs=array(
	'Tiene Tratamientos'=>array('index'),
	$model->id_tiene_tratamiento,
);

$this->menu=array(
	array('label'=>'List TieneTratamiento', 'url'=>array('index')),
	array('label'=>'Create TieneTratamiento', 'url'=>array('create')),
	array('label'=>'Update TieneTratamiento', 'url'=>array('update', 'id'=>$model->id_tiene_tratamiento)),
	array('label'=>'Delete TieneTratamiento', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_tiene_tratamiento),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TieneTratamiento', 'url'=>array('admin')),
);
?>

<h1>View TieneTratamiento #<?php echo $model->id_tiene_tratamiento; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_realizado',
		'id_tiene_tratamiento',
		'id_pieza_paciente',
		'comentario',
	),
)); ?>
