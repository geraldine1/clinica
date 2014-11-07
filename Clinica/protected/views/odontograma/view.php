<?php
/* @var $this OdontogramaController */
/* @var $model Odontograma */

$this->breadcrumbs=array(
	'Odontogramas'=>array('index'),
	$model->id_odontograma,
);

$this->menu=array(
	array('label'=>'List Odontograma', 'url'=>array('index')),
	array('label'=>'Create Odontograma', 'url'=>array('create')),
	array('label'=>'Update Odontograma', 'url'=>array('update', 'id'=>$model->id_odontograma)),
	array('label'=>'Delete Odontograma', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_odontograma),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Odontograma', 'url'=>array('admin')),
);
?>

<h1>View Odontograma #<?php echo $model->id_odontograma; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_odontograma',
		'id_ficha',
		'comentario',
	),
)); ?>
