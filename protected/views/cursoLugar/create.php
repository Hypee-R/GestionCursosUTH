<?php
/* @var $this CursoLugarController */
/* @var $model CursoLugar */

$this->breadcrumbs=array(
	'Cursos Lugares'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'List CursoLugar', 'url'=>array('index')),
	array('label'=>'Manage CursoLugar', 'url'=>array('admin')),
);
?>

<h1>Crear CursoLugar</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>