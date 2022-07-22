<?php
/* @var $data VCursos */
?>

<div class="container">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_CURSO')); ?>:</b>
	<?php echo CHtml::encode($data->ID_CURSO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CURSO')); ?>:</b>
	<?php echo CHtml::encode($data->CURSO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CEDE')); ?>:</b>
	<?php echo CHtml::encode($data->CEDE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FECHA_INICIO')); ?>:</b>
	<?php echo CHtml::encode($data->FECHA_INICIO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FECHA_FIN')); ?>:</b>
	<?php echo CHtml::encode($data->FECHA_FIN); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('LUGAR')); ?>:</b>
	<?php echo CHtml::encode($data->LUGAR); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('UBICACION')); ?>:</b>
	<?php echo CHtml::encode($data->UBICACION); ?>
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
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('TOTAL_INSCRITOS')); ?>:</b>
	<?php echo CHtml::encode($data->TOTAL_INSCRITOS); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('INSTRUCTOR')); ?>:</b>
	<?php echo CHtml::encode($data->INSTRUCTOR); ?>
	<br/>
	<?php
	$models = OrgInscritos::model()->findAll(
                 array('condition'=>'CURSO=1'));

	// format models as $key=>$value with listData
	$list = CHtml::listData($models, 
	                'ORGANIZADOR_INSCRITO', 'ORGANIZADOR_INSCRITO');
	$OrgInscritos = OrgInscritos::model();
	?>
 <?php  echo CHtml::dropDownList('ORGANIZADORES_INSCRITOS', $OrgInscritos, 
              $list,
              array('empty' => 'Organizadores inscritos en este curso'));
  ?>
	<br />
	<br />

</div>