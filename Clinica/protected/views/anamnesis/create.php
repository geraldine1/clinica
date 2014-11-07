<?php
/* @var $this AnamnesisController */
/* @var $model Anamnesis */

$this->breadcrumbs=array(
	'Anamnesises'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Anamnesis', 'url'=>array('index')),
	array('label'=>'Manage Anamnesis', 'url'=>array('admin')),
);
?>

<h1>Create Anamnesis</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>