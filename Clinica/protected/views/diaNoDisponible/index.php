<?php
/* @var $this DiaNoDisponibleController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Dia No Disponibles',
);

$this->menu=array(
	array('label'=>'Create DiaNoDisponible', 'url'=>array('create')),
	array('label'=>'Manage DiaNoDisponible', 'url'=>array('admin')),
);
?>

<h1>Dia No Disponibles</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
