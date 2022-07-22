<?php
/* @var $this CedeController */
/* @var $model Cede */

$this->breadcrumbs=array(
	'Cedes'=>array('index'),
	$model->ID_CEDE,
);

$this->menu=array(
	array('label'=>'List Cede', 'url'=>array('index')),
	array('label'=>'Create Cede', 'url'=>array('create')),
	array('label'=>'Update Cede', 'url'=>array('update', 'id'=>$model->ID_CEDE)),
	array('label'=>'Delete Cede', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID_CEDE),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Cede', 'url'=>array('admin')),
);
?>

<h1>Vista Cede #<?php echo $model->ID_CEDE; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID_CEDE',
		'NOMBRE_CEDE',
		'DIRECCION',
	),
)); ?>
