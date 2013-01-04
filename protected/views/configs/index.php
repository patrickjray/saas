<?php
/* @var $this ConfigsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Configs',
);

$this->menu=array(
	array('label'=>'Create Configs', 'url'=>array('create')),
	array('label'=>'Manage Configs', 'url'=>array('admin')),
);
?>

<h1>Configs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
