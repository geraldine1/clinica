<?php
/* @var $this BloqueNoDisponibleController */
/* @var $model BloqueNoDisponible */

$this->breadcrumbs=array(
	'Bloque No Disponibles'=>array('index'),
	$model->id_no_disponible=>array('view','id'=>$model->id_no_disponible),
	'Update',
);

$this->menu=array(
	array('label'=>'List BloqueNoDisponible', 'url'=>array('index')),
	array('label'=>'Create BloqueNoDisponible', 'url'=>array('create')),
	array('label'=>'View BloqueNoDisponible', 'url'=>array('view', 'id'=>$model->id_no_disponible)),
	array('label'=>'Manage BloqueNoDisponible', 'url'=>array('admin')),
);
?>

<h1>Update BloqueNoDisponible <?php echo $model->id_no_disponible; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>