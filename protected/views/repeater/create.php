<?php
/* @var $this RepeaterController */
/* @var $model Repeater */

$this->breadcrumbs=array(
	'Repeaters'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Repeaters', 'url'=>array('index')),
);
?>

<h1>Create Repeater</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>