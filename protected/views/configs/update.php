<?php
/* @var $this ConfigsController */
/* @var $model Configs */

$this->breadcrumbs=array(
	'Configs'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Configs', 'url'=>array('index')),
	array('label'=>'Create Configs', 'url'=>array('create')),
	array('label'=>'View Configs', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Configs', 'url'=>array('admin')),
);
?>

<h1>Update Configs <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>