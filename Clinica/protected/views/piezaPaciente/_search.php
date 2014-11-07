<?php
/* @var $this PiezaPacienteController */
/* @var $model PiezaPaciente */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_odontograma'); ?>
		<?php echo $form->textField($model,'id_odontograma'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_pieza'); ?>
		<?php echo $form->textField($model,'id_pieza'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_pieza_paciente'); ?>
		<?php echo $form->textField($model,'id_pieza_paciente'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->