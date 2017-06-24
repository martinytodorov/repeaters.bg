<?php
/* @var $this RepeaterController */
/* @var $model Repeater */

$this->breadcrumbs=array(
	'Repeaters'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Repeater', 'url'=>array('index')),
	array('label'=>'Create Repeater', 'url'=>array('create')),
	array('label'=>'View Repeater', 'url'=>array('view', 'id'=>$model->id)),
);
?>

<h1>Update Repeater <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>