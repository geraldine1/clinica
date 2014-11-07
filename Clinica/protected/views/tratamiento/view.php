<?php
/* @var $this TratamientoController */
/* @var $model Tratamiento */

$this->breadcrumbs=array(
	'Tratamientos'=>array('index'),
	$model->id_tratamiento,
);

$this->menu=array(
	array('label'=>'List Tratamiento', 'url'=>array('index')),
	array('label'=>'Create Tratamiento', 'url'=>array('create')),
	array('label'=>'Update Tratamiento', 'url'=>array('update', 'id'=>$model->id_tratamiento)),
	array('label'=>'Delete Tratamiento', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_tratamiento),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Tratamiento', 'url'=>array('admin')),
);
?>

<h1>View Tratamiento #<?php echo $model->id_tratamiento; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_tratamiento',
		'nombre',
		'descripcion',
                'valor',
	),
)); ?>
