<?php
/* @var $this DatosGeneralesController */
/* @var $model DatosGenerales */

$this->breadcrumbs=array(
	'Datos Generales'=>array('index'),
	$model->ID_DATO_GENERAL,
);

$this->menu=array(
	array('label'=>'List DatosGenerales', 'url'=>array('index')),
	array('label'=>'Create DatosGenerales', 'url'=>array('create')),
	array('label'=>'Update DatosGenerales', 'url'=>array('update', 'id'=>$model->ID_DATO_GENERAL)),
	array('label'=>'Delete DatosGenerales', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID_DATO_GENERAL),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage DatosGenerales', 'url'=>array('admin')),
);
?>

<h1>View DatosGenerales #<?php echo $model->ID_DATO_GENERAL; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID_DATO_GENERAL',
		'NOMBRE',
		'APELLIDO_PATERNO',
		'APELLIDO_MATERNO',
		'CORREO',
		'CURP',
		'DOMICILIO',
		'CODIGO_POSTAL',
		'CIUDAD',
		'MUNICIPIO',
		'LOCALIDAD',
		'TELEFONO',
		'CELULAR',
	),
)); ?>
