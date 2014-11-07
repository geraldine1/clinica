<?php
/* @var $this ForoController */
/* @var $model Foro */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_foro'); ?>
		<?php echo $form->textField($model,'id_foro'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rut_consultante'); ?>
		<?php echo $form->textField($model,'rut_consultante',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'correo_consultante'); ?>
		<?php echo $form->textField($model,'correo_consultante',array('size'=>35,'maxlength'=>35)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha_consulta'); ?>
		<?php echo $form->textField($model,'fecha_consulta'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pregunta'); ?>
		<?php echo $form->textArea($model,'pregunta',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'respuesta'); ?>
		<?php echo $form->textArea($model,'respuesta',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'estado_consulta'); ?>
		<?php echo $form->textField($model,'estado_consulta',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->