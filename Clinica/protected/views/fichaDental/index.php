<?php
/* @var $this FichaDentalController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Ficha Dentals',
);

$this->menu=array(
	array('label'=>'Create FichaDental', 'url'=>array('create')),
	array('label'=>'Manage FichaDental', 'url'=>array('admin')),
);
?>

<h1>Ficha Dentals</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
