<?php
/* @var $this DiaController */
/* @var $model Dia */

$this->breadcrumbs=array(
	'Dias'=>array('index'),
	$model->id_dia=>array('view','id'=>$model->id_dia),
	'Update',
);

$this->menu=array(
	array('label'=>'Volver', 'url'=>array('index')),
);
?>

<h1>Actualizar día <?php echo $model->nombre_dia; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>