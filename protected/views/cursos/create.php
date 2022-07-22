<?php
/* @var $this CursosController */
/* @var $model Cursos */

$this->breadcrumbs=array(
	'Cursoses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Cursos', 'url'=>array('index')),
	array('label'=>'Manage Cursos', 'url'=>array('admin')),
);
?>

<h1>Create Cursos</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>