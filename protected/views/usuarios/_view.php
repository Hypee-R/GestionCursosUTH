<?php
/* @var $this UsuariosController */
/* @var $data Usuarios */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('USUARIO')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->USUARIO), array('view', 'id'=>$data->USUARIO)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PASSWORD')); ?>:</b>
	<?php echo CHtml::encode($data->PASSWORD); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DATOS_GENERALES')); ?>:</b>
	<?php echo CHtml::encode($data->DATOS_GENERALES); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PERFIL')); ?>:</b>
	<?php echo CHtml::encode($data->PERFIL); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('STATUS')); ?>:</b>
	<?php echo CHtml::encode($data->STATUS); ?>
	<br />


</div>