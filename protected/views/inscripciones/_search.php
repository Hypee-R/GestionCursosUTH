<?php
/* @var $this InscripcionesController */
/* @var $model Inscripciones */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'ID_INSCRIPCION'); ?>
		<?php echo $form->textField($model,'ID_INSCRIPCION'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CURSO'); ?>
		<?php echo $form->textField($model,'CURSO'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PERSONA'); ?>
		<?php echo $form->textField($model,'PERSONA'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TIPO_INSCRIPCION'); ?>
		<?php echo $form->textField($model,'TIPO_INSCRIPCION'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->label($model,'STATUS'); ?>
		<?php echo $form->textField($model,'STATUS'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->