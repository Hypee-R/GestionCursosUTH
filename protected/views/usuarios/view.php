<?php
/* @var $this UsuariosController */
/* @var $model Usuarios */

$this->breadcrumbs=array(
	'Usuarioses'=>array('index'),
	$model->USUARIO,
);

$this->menu=array(
	array('label'=>'List Usuarios', 'url'=>array('index')),
	array('label'=>'Create Usuarios', 'url'=>array('create')),
	array('label'=>'Update Usuarios', 'url'=>array('update', 'id'=>$model->USUARIO)),
	array('label'=>'Delete Usuarios', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->USUARIO),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Usuarios', 'url'=>array('admin')),
);
?>

<h1>View Usuarios #<?php echo $model->USUARIO; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'USUARIO',
		'PASSWORD',
		'DATOS_GENERALES',
		'PERFIL',
		'STATUS',
	),
)); ?>
