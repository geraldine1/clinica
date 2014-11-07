<?php
/* @var $this PiezaController */
/* @var $model Pieza */

$this->breadcrumbs=array(
	'Piezas'=>array('index'),
	$model->id_pieza=>array('view','id'=>$model->id_pieza),
	'Update',
);

$this->menu=array(
	array('label'=>'List Pieza', 'url'=>array('index')),
	array('label'=>'Create Pieza', 'url'=>array('create')),
	array('label'=>'View Pieza', 'url'=>array('view', 'id'=>$model->id_pieza)),
	array('label'=>'Manage Pieza', 'url'=>array('admin')),
);
?>

<h1>Update Pieza <?php echo $model->id_pieza; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>