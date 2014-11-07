<?php
/* @var $this TratamientoController */
/* @var $data Tratamiento */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tratamiento')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_tratamiento), array('view', 'id'=>$data->id_tratamiento)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />


</div>