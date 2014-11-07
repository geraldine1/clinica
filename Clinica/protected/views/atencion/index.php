<?php
/* @var $this AtencionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Atencions',
);

$this->menu=array(
	array('label'=>'Create Atencion', 'url'=>array('create')),
	array('label'=>'Manage Atencion', 'url'=>array('admin')),
);
?>

<h1>Atencions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
