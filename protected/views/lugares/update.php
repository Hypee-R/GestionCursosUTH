<?php
/* @var $this LugaresController */
/* @var $model Lugares */

$this->breadcrumbs=array(
	'Lugares'=>array('index'),
	$model->CODIGO=>array('view','id'=>$model->CODIGO),
	'Update',
);

$this->menu=array(
	array('label'=>'List Lugares', 'url'=>array('index')),
	array('label'=>'Create Lugares', 'url'=>array('create')),
	array('label'=>'View Lugares', 'url'=>array('view', 'id'=>$model->CODIGO)),
	array('label'=>'Manage Lugares', 'url'=>array('admin')),
);
?>

<h1>Update Lugares <?php echo $model->CODIGO; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>