<?php
/* @var $this DiaNoDisponibleController */
/* @var $data DiaNoDisponible */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_dia_no_disponible')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_dia_no_disponible), array('view', 'id'=>$data->id_dia_no_disponible)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha')); ?>:</b>
	<?php echo CHtml::encode($data->fecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_dia')); ?>:</b>
	<?php echo CHtml::encode($data->id_dia); ?>
	<br />


</div>