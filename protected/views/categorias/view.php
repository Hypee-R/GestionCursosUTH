<?php
/* @var $this CategoriasController */
/* @var $model Categorias */

$this->breadcrumbs=array(
	'Categorías'=>array('index'),
	$model->ID_CATEGORIA,
);

$this->menu=array(
	array('label'=>'Lista de Categorías', 'url'=>array('index')),
	array('label'=>'Crear Categorías', 'url'=>array('create')),
	array('label'=>'Actualizar Categorías', 'url'=>array('update', 'id'=>$model->ID_CATEGORIA)),
	array('label'=>'Eliminar Categoría', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID_CATEGORIA),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Categorías', 'url'=>array('admin')),
);
?>

<h1>Vista Categoría #<?php echo $model->ID_CATEGORIA; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID_CATEGORIA',
		'CATEGORIA',
	),
)); ?>
