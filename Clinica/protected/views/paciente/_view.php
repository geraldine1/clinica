<?php
/* @var $this PacienteController */
/* @var $data Paciente */
?>

<div class="view">
	<b><?php echo CHtml::encode($data->getAttributeLabel('rut_paciente')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->rut_paciente), array('view', 'id'=>$data->rut_paciente)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_paciente')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_paciente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('apellidos_paciente')); ?>:</b>
	<?php echo CHtml::encode($data->apellidos_paciente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('direccion_paciente')); ?>:</b>
	<?php echo CHtml::encode($data->direccion_paciente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ciudad_paciente')); ?>:</b>
	<?php echo CHtml::encode($data->ciudad_paciente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefono_paciente')); ?>:</b>
	<?php echo CHtml::encode($data->telefono_paciente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('correo_paciente')); ?>:</b>
	<?php echo CHtml::encode($data->correo_paciente); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('sexo_paciente')); ?>:</b>
	<?php echo CHtml::encode($data->sexo_paciente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_nac_paciente')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_nac_paciente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('profesion_paciente')); ?>:</b>
	<?php echo CHtml::encode($data->profesion_paciente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lugar_trabajo')); ?>:</b>
	<?php echo CHtml::encode($data->lugar_trabajo); ?>
	<br />

	*/ ?>

</div>