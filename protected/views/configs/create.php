<?php
/* @var $this ConfigsController */
/* @var $model Configs */

$this->breadcrumbs=array(
	'Configs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Configs', 'url'=>array('index')),
	array('label'=>'Manage Configs', 'url'=>array('admin')),
);
?>

<h1>Create Configs</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>