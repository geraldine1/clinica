<?php
/* @var $this UsuarioController */
/* @var $model Usuario */

$this->breadcrumbs=array(
	'Usuarios'=>array('index'),
	$model->rut_usuario=>array('view','id'=>$model->rut_usuario),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar Usuario', 'url'=>array('index')),
	array('label'=>'Crear Usuario', 'url'=>array('create')),
	array('label'=>'Ver Usuario', 'url'=>array('view', 'id'=>$model->rut_usuario)),
	array('label'=>'Administrar Usuario', 'url'=>array('admin')),
);
?>

<h1>Update Usuario <?php echo $model->rut_usuario; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>