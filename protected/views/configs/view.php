<?php
/* @var $this ConfigsController */
/* @var $model Configs */

$this->breadcrumbs=array(
	'Configs'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Configs', 'url'=>array('index')),
	array('label'=>'Create Configs', 'url'=>array('create')),
	array('label'=>'Update Configs', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Configs', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Configs', 'url'=>array('admin')),
);
?>

<h1>View Configs #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'caption',
		'path',
		'name',
		'value',
		'account_id',
		'scope_id',
		'category_id',
	),
)); ?>
