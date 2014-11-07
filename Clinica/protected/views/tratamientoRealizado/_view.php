<?php
/* @var $this TratamientoRealizadoController */
/* @var $data TratamientoRealizado */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_realizado')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_realizado), array('view', 'id'=>$data->id_realizado)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_atencion')); ?>:</b>
	<?php echo CHtml::encode($data->id_atencion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tratamiento')); ?>:</b>
	<?php echo CHtml::encode($data->id_tratamiento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comentario')); ?>:</b>
	<?php echo CHtml::encode($data->comentario); ?>
	<br />


</div>