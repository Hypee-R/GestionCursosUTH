<?php
/* @var $this CedeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Cedes',
);

$this->menu=array(
	array('label'=>'Create Cede', 'url'=>array('create')),
	array('label'=>'Manage Cede', 'url'=>array('admin')),
);
?>

<h1>Cedes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
