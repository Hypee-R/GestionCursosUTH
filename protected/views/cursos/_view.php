<?php
/* @var $this CursosController */
/* @var $data Cursos */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_CURSO')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID_CURSO), array('view', 'id'=>$data->ID_CURSO)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CURSO')); ?>:</b>
	<?php echo CHtml::encode($data->CURSO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CUPO')); ?>:</b>
	<?php echo CHtml::encode($data->CUPO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('STATUS')); ?>:</b>
	<?php echo CHtml::encode($data->STATUS); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CATEGORIA')); ?>:</b>
	<?php echo CHtml::encode($data->CATEGORIA); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FECHA_INICIO')); ?>:</b>
	<?php echo CHtml::encode($data->FECHA_INICIO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FECHA_FIN')); ?>:</b>
	<?php echo CHtml::encode($data->FECHA_FIN); ?>
	<br />


</div>