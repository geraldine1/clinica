<?php
/* @var $this UsuarioController */
/* @var $data Usuario */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('rut_usuario')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->rut_usuario), array('view', 'id'=>$data->rut_usuario)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tipo')); ?>:</b>
	<?php echo CHtml::encode($data->idTipo->nombre_tipo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_usuario')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_usuario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('apellidos_usuario')); ?>:</b>
	<?php echo CHtml::encode($data->apellidos_usuario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('direccion_usuario')); ?>:</b>
	<?php echo CHtml::encode($data->direccion_usuario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefono_usuario')); ?>:</b>
	<?php echo CHtml::encode($data->telefono_usuario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('correo_usuario')); ?>:</b>
	<?php echo CHtml::encode($data->correo_usuario); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('password')); ?>:</b>
	<?php echo CHtml::encode($data->password); ?>
	<br />

	*/ ?>

</div>