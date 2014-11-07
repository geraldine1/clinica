<?php
/* @var $this PiezaController */
/* @var $model Pieza */

$this->breadcrumbs=array(
	'Piezas'=>array('index'),
	$model->id_pieza,
);

$this->menu=array(
	array('label'=>'List Pieza', 'url'=>array('index')),
	array('label'=>'Create Pieza', 'url'=>array('create')),
	array('label'=>'Update Pieza', 'url'=>array('update', 'id'=>$model->id_pieza)),
	array('label'=>'Delete Pieza', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_pieza),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Pieza', 'url'=>array('admin')),
);
?>

<h1>View Pieza #<?php echo $model->id_pieza; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_pieza',
		'nombre_pieza',
		'imagen',
	),
)); ?>
