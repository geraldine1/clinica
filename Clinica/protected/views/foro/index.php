<?php
/* @var $this ForoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Foros',
);

$this->menu=array(
	array('label'=>'Haz tu pregunta', 'url'=>array('pregunta')),
);
?>

<h1>Foros</h1>
<?php  $Foro = new Foro();  ?>
<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$Foro->searchRespondidas(),
	'itemView'=>'_view',
)); ?>
