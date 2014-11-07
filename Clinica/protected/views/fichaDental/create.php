<?php
/* @var $this FichaDentalController */
/* @var $model FichaDental */

$this->breadcrumbs=array(
	'Ficha Dentals'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List FichaDental', 'url'=>array('index')),
	array('label'=>'Manage FichaDental', 'url'=>array('admin')),
);
?>

<h1>Create FichaDental</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>