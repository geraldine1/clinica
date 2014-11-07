<?php
/* @var $this CaraController */
/* @var $model Cara */

$this->breadcrumbs=array(
	'Caras'=>array('index'),
	$model->id_cara,
);

$this->menu=array(
	array('label'=>'List Cara', 'url'=>array('index')),
	array('label'=>'Create Cara', 'url'=>array('create')),
	array('label'=>'Update Cara', 'url'=>array('update', 'id'=>$model->id_cara)),
	array('label'=>'Delete Cara', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_cara),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Cara', 'url'=>array('admin')),
);
?>

<h1>View Cara #<?php echo $model->id_cara; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_cara',
		'nombre',
		'id_pieza',
	),
)); ?>
