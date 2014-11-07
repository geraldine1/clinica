<?php
/* @var $this UsuarioController */
/* @var $model Usuario */

$this->breadcrumbs=array(
	'Usuarios'=>array('index'),
        $model->rut_usuario=>array('view','id'=>$model->rut_usuario),
	//$model->rut_usuario,
);

$this->menu=array(
	array('label'=>'Listar Usuarios', 'url'=>array('index')),
	array('label'=>'Crear Usuarios', 'url'=>array('create')),
	array('label'=>'Actualizar Usuario', 'url'=>array('update', 'id'=>$model->rut_usuario)),
	array('label'=>'Eliminar Usuario', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->rut_usuario),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Usuario', 'url'=>array('admin')),
);
?>

<h3>Usuario <?php echo $model->nombre_usuario. " ". $model->apellidos_usuario; ?></h3>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'rut_usuario',
                array(
                    'name' => 'id_tipo',
                    'value' => $model->idTipo->nombre_tipo,
                ),
		//'id_tipo',
		'nombre_usuario',
		'apellidos_usuario',
		'direccion_usuario',
		'telefono_usuario',
		'correo_usuario',
		'password',
	),
)); ?>
