<?php
/* @var $this ObservacionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Observacions',
);

$this->menu=array(
	array('label'=>'Create Observacion', 'url'=>array('create')),
	array('label'=>'Manage Observacion', 'url'=>array('admin')),
);
?>

<h1>Observacions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
