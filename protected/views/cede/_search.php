<?php
/* @var $this CedeController */
/* @var $model Cede */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'ID_CEDE'); ?>
		<?php echo $form->textField($model,'ID_CEDE'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NOMBRE_CEDE'); ?>
		<?php echo $form->textField($model,'NOMBRE_CEDE',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DIRECCION'); ?>
		<?php echo $form->textField($model,'DIRECCION',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->