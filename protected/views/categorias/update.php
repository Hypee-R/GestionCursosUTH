<?php
/* @var $this CategoriasController */
/* @var $model Categorias */

$this->breadcrumbs=array(
	'Categorías'=>array('index'),
	$model->ID_CATEGORIA=>array('view','id'=>$model->ID_CATEGORIA),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Lista de Categorías', 'url'=>array('index')),
	array('label'=>'Crear Categorías', 'url'=>array('create')),
	array('label'=>'Ver Categoría', 'url'=>array('view', 'id'=>$model->ID_CATEGORIA)),
	array('label'=>'Administrar Categorías', 'url'=>array('admin')),
);
?>

<h1>Actualizar Categoría <?php echo $model->ID_CATEGORIA; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>