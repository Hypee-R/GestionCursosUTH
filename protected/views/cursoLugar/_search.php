<?php
/* @var $this CursoLugarController */
/* @var $model CursoLugar */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'ID_CURSOLUGAR'); ?>
		<?php echo $form->textField($model,'ID_CURSOLUGAR'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CURSO'); ?>
		<?php echo $form->textField($model,'CURSO'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'LUGAR'); ?>
		<?php echo $form->textField($model,'LUGAR',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->