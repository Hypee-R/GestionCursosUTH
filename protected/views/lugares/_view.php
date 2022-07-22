<?php
/* @var $this LugaresController */
/* @var $data Lugares */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('CODIGO')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->CODIGO), array('view', 'id'=>$data->CODIGO)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CEDE')); ?>:</b>
	<?php echo CHtml::encode($data->CEDE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DESCRIPCION')); ?>:</b>
	<?php echo CHtml::encode($data->DESCRIPCION); ?>
	<br />


</div>