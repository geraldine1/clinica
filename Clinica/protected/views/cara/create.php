<?php
/* @var $this CaraController */
/* @var $model Cara */

$this->breadcrumbs=array(
	'Caras'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Cara', 'url'=>array('index')),
	array('label'=>'Manage Cara', 'url'=>array('admin')),
);
?>

<h1>Create Cara</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>