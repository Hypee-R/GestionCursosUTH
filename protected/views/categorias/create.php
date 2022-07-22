<?php
/* @var $this CategoriasController */
/* @var $model Categorias */

$this->breadcrumbs=array(
	'Categorías'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Lista de Categorías', 'url'=>array('index')),
	array('label'=>'Administrar Categorías', 'url'=>array('admin')),
);
?>

<h1>Crear Categoría</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>