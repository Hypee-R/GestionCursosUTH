<?php
/* @var $this CursosController */
/* @var $model Cursos */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'cursos-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'CURSO'); ?>
		<?php echo $form->textField($model,'CURSO',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'CURSO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CUPO'); ?>
		<?php echo $form->textField($model,'CUPO'); ?>
		<?php echo $form->error($model,'CUPO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'STATUS'); ?>
		<?php echo $form->textField($model,'STATUS'); ?>
		<?php echo $form->error($model,'STATUS'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CATEGORIA'); ?>
		<?php echo $form->dropDownList($model,'CATEGORIA',
		CHtml::listData(Categorias::model()->findAll(array('order' => 'CATEGORIA ASC')), 'ID_CATEGORIA','CATEGORIA'), array('empty'=>'Seleccione una categoría')); ?>
		<?php echo $form->error($model,'CATEGORIA'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FECHA_INICIO'); ?>
		<?php
		$this->widget('zii.widgets.jui.CJuiDatePicker',array(
		    'model'=>$model,
			'attribute' => 'FECHA_INICIO',
			'language'=> 'es',
			'name'=>'datepicker-date-format',    
		    'value'=>date('Y/m/d'),
		    'options'=>array(
				'buttonImage'=>Yii::app()->baseUrl.'/images/calendar.png',
				 'buttonImageOnly'=>true,
				 'buttonText'=>'Fecha',
				 'dateFormat'=>'yy-mm-dd',//Date format 'mm/dd/yy','yy-mm-dd','d M, y','d MM, y','DD, d MM, yy'        
		        'showButtonPanel'=>true,
				'showAnim'=>'slide',
		    ),
		    'htmlOptions'=>array('readonly'=>"readonly"),
		));
	  ?>
		<?php echo $form->error($model,'FECHA_INICIO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FECHA_FIN'); ?>
		<?php
		$this->widget('zii.widgets.jui.CJuiDatePicker',array(
		    'model'=>$model,
			'attribute' => 'FECHA_FIN',
			'language'=> 'es',
			'name'=>'datepicker-date-format',    
		    'value'=>date('Y/m/d'),
		    'options'=>array(        
		       'buttonImage'=>'/images/calendar.png',
				 'buttonImageOnly'=>true,
				 'buttonText'=>'Fecha',
				 'dateFormat'=>'yy-mm-dd',//Date format 'mm/dd/yy','yy-mm-dd','d M, y','d MM, y','DD, d MM, yy'        
		        'showButtonPanel'=>true,
				'showAnim'=>'slide',
		    ),
		    'htmlOptions'=>array('readonly'=>"readonly"),
		));
	  ?>
		<?php echo $form->error($model,'FECHA_FIN'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->