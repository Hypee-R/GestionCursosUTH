<?php
/* @var $this CedeController */
/* @var $model Cede */

$this->breadcrumbs=array(
	'Cedes'=>array('index'),
	$model->ID_CEDE=>array('view','id'=>$model->ID_CEDE),
	'Update',
);

$this->menu=array(
	array('label'=>'List Cede', 'url'=>array('index')),
	array('label'=>'Create Cede', 'url'=>array('create')),
	array('label'=>'View Cede', 'url'=>array('view', 'id'=>$model->ID_CEDE)),
	array('label'=>'Manage Cede', 'url'=>array('admin')),
);
?>

<h1>Actualizar Cede <?php echo $model->ID_CEDE; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>