<?php
/* @var $this HorariosController */
/* @var $model Horarios */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'ID_HORARIO'); ?>
		<?php echo $form->textField($model,'ID_HORARIO'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CURSO'); ?>
		<?php echo $form->textField($model,'CURSO'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DIA'); ?>
		<?php echo $form->textField($model,'DIA',array('size'=>9,'maxlength'=>9)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'HORA_INICIO'); ?>
		<?php echo $form->textField($model,'HORA_INICIO'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'HORA_FIN'); ?>
		<?php echo $form->textField($model,'HORA_FIN'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->