<?php
/* @var $this RepeaterController */
/* @var $model Repeater */

$this->breadcrumbs=array(
	'Repeaters'=>array('index'),
	$model->callsign,
);
?>

<?php if (Yii::app()->user->isGuest == false): ?>
    <?php
    $this->menu=array(
        array('label'=>'List Repeater', 'url'=>array('index')),
        array('label'=>'Create Repeater', 'url'=>array('create')),
        array('label'=>'Update Repeater', 'url'=>array('update', 'id'=>$model->id)),
        array('label'=>'Delete Repeater', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
    );
    ?>
<?php endif; ?>

<div class="rep-view-content">
    <?php echo CHtml::image(Yii::app()->request->baseUrl.$model->getImage())?>
    <h1 class="rep-view-title"><?php echo $model->callsign; ?></h1>
</div>

<?php $this->widget('zii.widgets.CDetailView', array(
    'data'=>$model,
    'attributes'=> array(
        'callsign',
        'band',
        'channel',
        'out',
        'in',
        /*'blank',*/
        'mode',
        'qthr',
        'location',
        'ngr',
        'reg',
        'ctcss',
        'keeper',
        'lat',
        'long',
        array(
            'name'=>'status',
            'type'=>'raw',
            'value'=> $model->getStatus(),
        ),
    ),
    'htmlOptions'=>array('class'=>'table')
)); ?>

<?php /*echo "
<script type='javascript'>
var lat = ".$model->$lat."
var long = ".$model->$long."
</script>"
*/?>

<?php
    Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/js/gmaps.js',CClientScript::POS_END);
?>

<?php
    $clientScript=Yii::app()->getClientScript();
    $clientScript->registerScript('googleMapsCor',
            'var googleMapsLat='.$model->lat.';'.'var googleMapsLong='.$model->long.';',CClientScript::POS_HEAD);
?>

<!--<script type="javascript">
    google.maps.event.addDomListener(window, 'load', function() {
        var canvas = document.getElementById("map-canvas");
        var mapOptions = {
            center: new google.maps.LatLng(40.714352, -74.005973),
            zoom:   7
        };

        var map = new google.maps.Map(canvas, mapOptions);
    });
</script>-->

