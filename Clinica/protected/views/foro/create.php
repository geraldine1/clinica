<?php
/* @var $this ForoController */
/* @var $model Foro */

$this->breadcrumbs=array(
	'Foros'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Foro', 'url'=>array('index')),
	array('label'=>'Manage Foro', 'url'=>array('admin')),
);
?>

<h1>Create Foro</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>