<?php
/* @var $this TratamientoRealizadoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tratamiento Realizados',
);

$this->menu=array(
	array('label'=>'Create TratamientoRealizado', 'url'=>array('create')),
	array('label'=>'Manage TratamientoRealizado', 'url'=>array('admin')),
);
?>

<h1>Tratamiento Realizados</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
