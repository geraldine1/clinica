<?php
/* @var $this TratamientoController */
/* @var $model Tratamiento */

$this->breadcrumbs=array(
	'Tratamientos'=>array('index'),
	$model->id_tratamiento=>array('view','id'=>$model->id_tratamiento),
	'Update',
);

$this->menu=array(
	array('label'=>'List Tratamiento', 'url'=>array('index')),
	array('label'=>'Create Tratamiento', 'url'=>array('create')),
	array('label'=>'View Tratamiento', 'url'=>array('view', 'id'=>$model->id_tratamiento)),
	array('label'=>'Manage Tratamiento', 'url'=>array('admin')),
);
?>

<h1>Update Tratamiento <?php echo $model->id_tratamiento; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>