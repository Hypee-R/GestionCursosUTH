<?php
/* @var $this InscripcionesController */
/* @var $model Inscripciones */
if (Yii::app()->user->checkAccess('Administrador'))
{ 
$this->breadcrumbs=array(
	'Inscripciones'=>array('index'),
	'Crear',
);
$this->menu=array(
	array('label'=>'List Inscripciones', 'url'=>array('index')),
	array('label'=>'Manage Inscripciones', 'url'=>array('admin')),
);
}else{
	$this->breadcrumbs=array(
	'Inscripciones /',
	'         Crear',);
}
?>

<h1>Inscribirme a un curso</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>