<?php
/* @var $this TieneTratamientoController */
/* @var $model TieneTratamiento */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_realizado'); ?>
		<?php echo $form->textField($model,'id_realizado'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_tiene_tratamiento'); ?>
		<?php echo $form->textField($model,'id_tiene_tratamiento'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_pieza_paciente'); ?>
		<?php echo $form->textField($model,'id_pieza_paciente'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'comentario'); ?>
		<?php echo $form->textArea($model,'comentario',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->