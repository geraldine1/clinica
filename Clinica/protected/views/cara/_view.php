<?php
/* @var $this CaraController */
/* @var $data Cara */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_cara')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_cara), array('view', 'id'=>$data->id_cara)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_pieza')); ?>:</b>
	<?php echo CHtml::encode($data->id_pieza); ?>
	<br />


</div>