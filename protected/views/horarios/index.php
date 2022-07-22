<?php
/* @var $this HorariosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Horarioses',
);

$this->menu=array(
	array('label'=>'Create Horarios', 'url'=>array('create')),
	array('label'=>'Manage Horarios', 'url'=>array('admin')),
);
?>

<h1>Horarioses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
