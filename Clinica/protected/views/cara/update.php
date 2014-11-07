<?php
/* @var $this CaraController */
/* @var $model Cara */

$this->breadcrumbs=array(
	'Caras'=>array('index'),
	$model->id_cara=>array('view','id'=>$model->id_cara),
	'Update',
);

$this->menu=array(
	array('label'=>'List Cara', 'url'=>array('index')),
	array('label'=>'Create Cara', 'url'=>array('create')),
	array('label'=>'View Cara', 'url'=>array('view', 'id'=>$model->id_cara)),
	array('label'=>'Manage Cara', 'url'=>array('admin')),
);
?>

<h1>Update Cara <?php echo $model->id_cara; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>