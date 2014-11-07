<?php
/* @var $this AtencionController */
/* @var $model Atencion */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'atencion-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php //echo $form->labelEx($model,'id_ficha'); ?>
		<?php echo $form->hiddenField($model,'id_ficha'); ?>
		<?php //echo $form->error($model,'id_ficha'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'fecha'); ?>
		<?php echo $form->hiddenField($model,'fecha'); ?>
		<?php //echo $form->error($model,'fecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_inicio'); ?>
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker',array(
                'attribute'=>"fecha_inicio",
                'model'=>$model,
                'language'=>'es',
                'value'=>$model->fecha_inicio,
                'language' => 'es',
               
                    'options'=>array(
                        'autoSize'=>true,
                        'buttonImage'=>Yii::app()->baseUrl.'/images/calendar.png',
                        'buttonImageOnly'=>true,
                        'dateFormat'=>'yy-mm-dd',
                        'showButtonPanel'=>true,
                        'changeMonth'=>true,
                        'changeYear'=>true,
                        'showOtherMonths'=>true,
                        'changeMonth' => 'true',
                        'changeYear' => 'true',
                ),
            ))?>
		<?php echo $form->error($model,'fecha_inicio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_termino'); ?>
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker',array(
                'attribute'=>"fecha_termino",
                'model'=>$model,
                'language'=>'es',
                'value'=>$model->fecha_termino,
                'language' => 'es',
               
                    'options'=>array(
                        'autoSize'=>true,
                        'buttonImage'=>Yii::app()->baseUrl.'/images/calendar.png',
                        'buttonImageOnly'=>true,
                        'dateFormat'=>'yy-mm-dd',
                        'showButtonPanel'=>true,
                        'changeMonth'=>true,
                        'changeYear'=>true,
                        
                        'showOtherMonths'=>true,
                        'changeMonth' => 'true',
                        'changeYear' => 'true',
                ),
            ))?>
		<?php echo $form->error($model,'fecha_termino'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'estado'); ?>
		<?php echo $form->dropDownList($model, 'estado', array('Terminado'=>'Terminado', 'En proceso'=>'En proceso','Cancelado'=>'Cancelado')); ?>
		<?php echo $form->error($model,'estado'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->