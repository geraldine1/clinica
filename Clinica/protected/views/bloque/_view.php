<?php
/* @var $this BloqueController */
/* @var $data Bloque */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_bloque')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_bloque), array('view', 'id'=>$data->id_bloque)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('inicio')); ?>:</b>
	<?php echo CHtml::encode($data->inicio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fin')); ?>:</b>
	<?php echo CHtml::encode($data->fin); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_dia')); ?>:</b>
	<?php echo CHtml::encode($data->id_dia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estado')); ?>:</b>
	<?php echo CHtml::encode($data->estado); ?>
	<br />


</div>