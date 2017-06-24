<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<div class="row">
    <div class="col-xs-12 col-sm-6 col-lg-6 col-md-6">
        <div id="content">
            <?php echo $content; ?>
        </div><!-- content -->
    </div>
    <div class="col-xs-12 col-sm-6 col-lg-6 col-md-6">
        <div id="sidebar">
            <?php
            $this->beginWidget('zii.widgets.CPortlet', array(
                'title'=>'Operations',
            ));
            $this->widget('zii.widgets.CMenu', array(
                'items'=>$this->menu,
                'htmlOptions'=>array('class'=>'operations'),
            ));
            $this->endWidget();
            ?>
            <div id="map-canvas"></div>
        </div><!-- sidebar -->
    </div>
</div>
<?php $this->endContent(); ?>