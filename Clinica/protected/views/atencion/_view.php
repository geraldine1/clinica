<?php
/* @var $this AtencionController */
/* @var $data Atencion */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_atencion')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_atencion), array('view', 'id'=>$data->id_atencion)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_ficha')); ?>:</b>
	<?php echo CHtml::encode($data->id_ficha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha')); ?>:</b>
	<?php echo CHtml::encode($data->fecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_inicio')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_inicio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_termino')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_termino); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estado')); ?>:</b>
	<?php echo CHtml::encode($data->estado); ?>
	<br />


</div>