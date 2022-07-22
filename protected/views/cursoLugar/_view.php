<?php
/* @var $this CursoLugarController */
/* @var $data CursoLugar */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_CURSOLUGAR')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID_CURSOLUGAR), array('view', 'id'=>$data->ID_CURSOLUGAR)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CURSO')); ?>:</b>
	<?php echo CHtml::encode($data->CURSO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('LUGAR')); ?>:</b>
	<?php echo CHtml::encode($data->LUGAR); ?>
	<br />


</div>