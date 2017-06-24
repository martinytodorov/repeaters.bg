<?php
/* @var $this RepeaterController */
/* @var $model Repeater */

$this->breadcrumbs=array(
    'Repeaters'=>array('index'),
    'Manage',
);

$this->menu=array(
    array('label'=>'List Repeater', 'url'=>array('index')),
    array('label'=>'Create Repeater', 'url'=>array('create')),
);
?>

    <!--<p>
    You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
    or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
    </p>-->


<?php if (Yii::app()->user->isGuest == true): ?>
    <?php $this->widget('zii.widgets.grid.CGridView', array(
        'id'=>'repeater-grid',
        'dataProvider'=>$dataProvider,
        /*'filter'=>$model,*/
        'selectableRows'=>1,
        'selectionChanged'=>'function(id){ 
			window.open(
			"'.$this->createUrl('view').'/id/"+$.fn.yiiGridView.getSelection(id),
			  "_blank"
			);
			//location.href = "'.$this->createUrl('view').'/id/"+$.fn.yiiGridView.getSelection(id);
		}',
        'columns'=>array(
            array(
                'type'=>'html',
                'value'=>'CHtml::image(Yii::app()->request->baseUrl.$data->getImage())',
                'htmlOptions'=>array('class'=>'grid-image')
            ),
            array(
                'name'=>'callsign',
                'htmlOptions'=>array('class'=>'grid-callsign'),
            ),
            array(
                'name'=>'location',
                'htmlOptions'=>array('class'=>'grid-location'),
            ),
            array(
                'name'=>'out',
                'htmlOptions'=>array('class'=>'grid-output hidden-xs'),
                'headerHtmlOptions'=>array('class'=>'hidden-xs')
            ),
            array(
                'name'=>'in',
                'htmlOptions'=>array('class'=>'grid-input hidden-xs'),
                'headerHtmlOptions'=>array('class'=>'hidden-xs')
            ),
            array(
                'name'=>'Output<br/>Input',
                'type'=>'html',
                'value'=>'$data->out.\' <br\><span class="grid-input"> \'.$data->in',
                'htmlOptions'=>array('class'=>'grid-output visible-xs-block'),
                'headerHtmlOptions'=>array('class'=>'visible-xs-block')
            ),
            array(
                'name'=>'band',
                'htmlOptions'=>array('class'=>'hidden-xs'),
                'headerHtmlOptions'=>array('class'=>'hidden-xs')
            ),
            array(
                'name'=>'mode',
                'htmlOptions'=>array('class'=>'hidden-xs'),
                'headerHtmlOptions'=>array('class'=>'hidden-xs')
            ),
        ),
        'pager'=>array(
            'internalPageCssClass' => 'btn hidden-xs',
            'previousPageCssClass' => 'btn',
            'nextPageCssClass' => 'btn',
            'header' => ''
        ),
        'itemsCssClass'=>'table',
    )); ?>
<?php endif; ?>