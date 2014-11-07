<?php
/* @var $this CaraController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Caras',
);

$this->menu=array(
	array('label'=>'Create Cara', 'url'=>array('create')),
	array('label'=>'Manage Cara', 'url'=>array('admin')),
);
?>

<h1>Caras</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
