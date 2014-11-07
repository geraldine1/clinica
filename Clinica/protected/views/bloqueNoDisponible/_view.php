<?php
/* @var $this BloqueNoDisponibleController */
/* @var $data BloqueNoDisponible */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_no_disponible')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_no_disponible), array('view', 'id'=>$data->id_no_disponible)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha')); ?>:</b>
	<?php echo CHtml::encode($data->fecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_bloque')); ?>:</b>
	<?php echo CHtml::encode($data->id_bloque); ?>
	<br />


</div>