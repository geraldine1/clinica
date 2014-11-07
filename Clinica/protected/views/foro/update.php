<?php
/* @var $this ForoController */
/* @var $model Foro */

$this->breadcrumbs=array(
	'Foros'=>array('index'),
	$model->id_foro=>array('view','id'=>$model->id_foro),
	'Update',
);

$this->menu=array(

	array('label'=>'Ver preguntas', 'url'=>array('admin')),
);
?>

<h1>Update Foro <?php echo $model->id_foro; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>