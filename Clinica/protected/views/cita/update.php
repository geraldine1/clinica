<?php
/* @var $this CitaController */
/* @var $model Cita */

$this->breadcrumbs=array(
	'Citas'=>array('index'),
	$model->id_cita=>array('view','id'=>$model->id_cita),
	'Update',
);

$this->menu=array(
	array('label'=>'List Cita', 'url'=>array('index')),
	array('label'=>'Create Cita', 'url'=>array('create')),
	array('label'=>'View Cita', 'url'=>array('view', 'id'=>$model->id_cita)),
	array('label'=>'Manage Cita', 'url'=>array('admin')),
);
?>

<h1>Update Cita <?php echo $model->id_cita; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>