<?php
/* @var $this TratamientoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tratamientos',
);

$this->menu=array(
	array('label'=>'Create Tratamiento', 'url'=>array('create')),
	array('label'=>'Manage Tratamiento', 'url'=>array('admin')),
);
?>

<h1>Tratamientos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
