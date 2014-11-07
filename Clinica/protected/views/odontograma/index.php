<?php
/* @var $this OdontogramaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Odontogramas',
);

$this->menu=array(
	array('label'=>'Create Odontograma', 'url'=>array('create')),
	array('label'=>'Manage Odontograma', 'url'=>array('admin')),
);
?>

<h1>Odontogramas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
