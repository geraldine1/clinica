<?php
/* @var $this TieneTratamientoController */
/* @var $model TieneTratamiento */

$this->breadcrumbs=array(
	'Tiene Tratamientos'=>array('index'),
	$model->id_tiene_tratamiento=>array('view','id'=>$model->id_tiene_tratamiento),
	'Update',
);

$this->menu=array(
	array('label'=>'List TieneTratamiento', 'url'=>array('index')),
	array('label'=>'Create TieneTratamiento', 'url'=>array('create')),
	array('label'=>'View TieneTratamiento', 'url'=>array('view', 'id'=>$model->id_tiene_tratamiento)),
	array('label'=>'Manage TieneTratamiento', 'url'=>array('admin')),
);
?>

<h1>Update TieneTratamiento <?php echo $model->id_tiene_tratamiento; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>