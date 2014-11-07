<?php
/* @var $this AtencionController */
/* @var $model Atencion */

$this->breadcrumbs=array(
	'Atencions'=>array('index'),
	$model->id_atencion,
);

$this->menu=array(
	array('label'=>'List Atencion', 'url'=>array('index')),
	array('label'=>'Create Atencion', 'url'=>array('create')),
	array('label'=>'Update Atencion', 'url'=>array('update', 'id'=>$model->id_atencion)),
	array('label'=>'Delete Atencion', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_atencion),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Atencion', 'url'=>array('admin')),
);
?>

<h1>View Atencion #<?php echo $model->id_atencion; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_atencion',
		'id_ficha',
		'fecha',
		'fecha_inicio',
		'fecha_termino',
		'estado',
	),
)); ?>
