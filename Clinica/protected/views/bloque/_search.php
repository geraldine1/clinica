<?php
/* @var $this BloqueController */
/* @var $model Bloque */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_bloque'); ?>
		<?php echo $form->textField($model,'id_bloque'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'inicio'); ?>
		<?php echo $form->textField($model,'inicio'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fin'); ?>
		<?php echo $form->textField($model,'fin'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_dia'); ?>
		<?php echo $form->textField($model,'id_dia'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'estado'); ?>
		<?php echo $form->textField($model,'estado',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->