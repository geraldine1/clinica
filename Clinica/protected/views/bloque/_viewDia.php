<?php
/* @var $this DiaController */
/* @var $data Dia */
?>

<div class="view">

	<!--<b><?php //echo CHtml::encode($data->getAttributeLabel('id_dia')); ?>:</b>
	<?php //echo CHtml::link(CHtml::encode($data->id_dia), array('update', 'id'=>$data->id_dia)); ?>
	<br />-->

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_dia')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->nombre_dia), array('bloquesDia', 'id'=>$data->id_dia)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estado_dia')); ?>:</b>
	<?php echo CHtml::encode($data->estado_dia); ?>
	<br />


</div>