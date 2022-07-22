<?php
/* @var $this CursosController */
/* @var $model Cursos */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'ID_CURSO'); ?>
		<?php echo $form->textField($model,'ID_CURSO'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CURSO'); ?>
		<?php echo $form->textField($model,'CURSO',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CUPO'); ?>
		<?php echo $form->textField($model,'CUPO'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'STATUS'); ?>
		<?php echo $form->textField($model,'STATUS'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CATEGORIA'); ?>
		<?php echo $form->textField($model,'CATEGORIA'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FECHA_INICIO'); ?>
		<?php echo $form->textField($model,'FECHA_INICIO'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FECHA_FIN'); ?>
		<?php echo $form->textField($model,'FECHA_FIN'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->