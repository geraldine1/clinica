<?php
/* @var $this PiezaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Piezas',
);

$this->menu=array(
	array('label'=>'Create Pieza', 'url'=>array('create')),
	array('label'=>'Manage Pieza', 'url'=>array('admin')),
);
?>

<h1>Piezas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
