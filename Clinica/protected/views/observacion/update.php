<?php
/* @var $this ObservacionController */
/* @var $model Observacion */

$this->breadcrumbs=array(
	'Observacions'=>array('index'),
	$model->id_observacion=>array('view','id'=>$model->id_observacion),
	'Update',
);
?>

<h1>Update Observacion <?php echo $model->id_observacion; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>