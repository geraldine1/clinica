<?php
/* @var $this FichaDentalController */
/* @var $model FichaDental */

$this->breadcrumbs=array(
	'Ficha Dentals'=>array('index'),
	$model->id_ficha=>array('view','id'=>$model->id_ficha),
	'Update',
);

$this->menu=array(
	array('label'=>'List FichaDental', 'url'=>array('index')),
	array('label'=>'Create FichaDental', 'url'=>array('create')),
	array('label'=>'View FichaDental', 'url'=>array('view', 'id'=>$model->id_ficha)),
	array('label'=>'Manage FichaDental', 'url'=>array('admin')),
);
?>

<h1>Update FichaDental <?php echo $model->id_ficha; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>