<?php
/* @var $this ObservacionController */
/* @var $data Observacion */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_observacion')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_observacion), array('view', 'id'=>$data->id_observacion)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_pieza_paciente')); ?>:</b>
	<?php echo CHtml::encode($data->id_pieza_paciente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('observacion')); ?>:</b>
	<?php echo CHtml::encode($data->observacion); ?>
	<br />


</div>