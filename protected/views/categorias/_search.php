<?php
/* @var $this CategoriasController */
/* @var $model Categorias */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'ID_CATEGORIA'); ?>
		<?php echo $form->textField($model,'ID_CATEGORIA'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CATEGORIA'); ?>
		<?php echo $form->textField($model,'CATEGORIA',array('size'=>40,'maxlength'=>40)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->