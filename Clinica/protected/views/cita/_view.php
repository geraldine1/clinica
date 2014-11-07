<?php
/* @var $this CitaController */
/* @var $data Cita */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_cita')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_cita), array('view', 'id'=>$data->id_cita)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rut_paciente')); ?>:</b>
	<?php echo CHtml::encode($data->rut_paciente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estado_cita')); ?>:</b>
	<?php echo CHtml::encode($data->estado_cita); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha')); ?>:</b>
	<?php echo CHtml::encode($data->fecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_bloque')); ?>:</b>
	<?php echo CHtml::encode($data->id_bloque); ?>
	<br />


</div>