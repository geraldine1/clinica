<?php
/* @var $this TieneTratamientoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tiene Tratamientos',
);

$this->menu=array(
	array('label'=>'Create TieneTratamiento', 'url'=>array('create')),
	array('label'=>'Manage TieneTratamiento', 'url'=>array('admin')),
);
?>

<h1>Tiene Tratamientos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
