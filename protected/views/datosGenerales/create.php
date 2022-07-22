<?php
/* @var $this DatosGeneralesController */
/* @var $model DatosGenerales */

$this->breadcrumbs=array(
	'Registro'=>array('index'),
	'Crear',
);

/*$this->menu=array(
	array('label'=>'List DatosGenerales', 'url'=>array('index')),
	array('label'=>'Manage DatosGenerales', 'url'=>array('admin')),
);*/
?>

<h1>Registro de usuarios</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>