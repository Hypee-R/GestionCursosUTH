<?php
/* @var $this InscripcionesController */
/* @var $model Inscripciones */
/* @var $form CActiveForm */
?>

<div class="form">

			<?php $form=$this->beginWidget('CActiveForm', array(
				'id'=>'inscripciones-form',
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
					<?php echo $form->dropDownList($model,'CURSO', CHtml::listData(Cursos::model()->findAll(array('order' => 'ID_CURSO ASC', 'condition'=>'STATUS=1')), 'ID_CURSO','CURSO'), array('empty'=>'Seleccione un curso'));?>
					<?php echo $form->error($model,'CURSO'); ?>
				</div>
				
				<div class="row">
					<?php if(Yii::app()->user->checkAccess('Administrador'))
					{ ?>
								<?php echo $form->labelEx($model,'PERSONA'); ?>
								<?php echo $form->dropDownList($model,'PERSONA', CHtml::listData(Usuarios::model()->findAll(array('order' => 'USUARIO ASC', 'condition'=>'STATUS=1 AND USUARIO!= "'.Yii::app()->user->id.'" ')), 'USUARIO','USUARIO'), array('empty'=>'Seleccione el usuario')); ?>
					<?php } else { ?> 
								<?php echo $form->hiddenField($model,'PERSONA', array('value'=>Yii::app()->user->id)); ?>
					<?php } ?> 
					
					<?php echo $form->error($model,'PERSONA'); ?>
				</div>
				
				<div class="row">
				<?php if(Yii::app()->user->checkAccess('Administrador') || Yii::app()->user->checkAccess('Organizador') || Yii::app()->user->checkAccess('Instructor')) { ?>
						<?php echo $form->labelEx($model,'TIPO_INSCRIPCION'); ?>
						<?php echo $form->dropDownList($model,'TIPO_INSCRIPCION', CHtml::listData(Tipos::model()->findAll(array('order' => 'ID_TIPO ASC')), 'ID_TIPO','TIPO_INSCRIPCION'), array('empty'=>'Seleccione el tipo de inscripción'));?>
				<?php } else if(Yii::app()->user->checkAccess('Participante')) {?>
								<?php echo $form->hiddenField($model, 'TIPO_INSCRIPCION', array('value'=>3)); ?>
				<?php } ?>
				<?php echo $form->error($model,'TIPO_INSCRIPCION'); ?>
				</div>

				<div class="row">
					<?php echo $form->hiddenField($model,'STATUS', array('value'=>'Activa')); ?>
					<?php echo $form->error($model,'STATUS'); ?>
				</div>
				
				<div class="row buttons">
					<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
				</div>

			<?php $this->endWidget(); ?>
</div><!-- form -->