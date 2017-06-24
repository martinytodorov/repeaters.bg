<?php
/* @var $this RepeaterController */
/* @var $data Repeater */
?>

<a class="link" href="<?php echo CHtml::encode($data->id)?>" >
    <div class="reprow">
        <div class="column">
            <?php echo CHtml::image(Yii::app()->controller->getBaseUrl().$data->getImage()); ?>
        </div>

        <div class="column">
            <b><?php echo CHtml::encode($data->getAttributeLabel('callsign')); ?>:</b>
            <?php echo CHtml::encode($data->callsign); ?>
            <br />

            <b><?php echo CHtml::encode($data->getAttributeLabel('band')); ?>:</b>
            <?php echo CHtml::encode($data->band); ?>
            <br />

            <b><?php echo CHtml::encode($data->getAttributeLabel('location')); ?>:</b>
            <?php echo CHtml::encode($data->location); ?>
            <br />

            <b><?php echo CHtml::encode($data->getAttributeLabel('out')); ?>:</b>
            <?php echo CHtml::encode($data->out); ?>
            <br />

            <b><?php echo CHtml::encode($data->getAttributeLabel('in')); ?>:</b>
            <?php echo CHtml::encode($data->in); ?>
            <br />
        </div>

        <?php /*echo CHtml::encode($data->getAttributeLabel('blank')); ?>:</b>
        <?php echo CHtml::encode($data->blank); ?>
        <br />

        <b><?php
        <b><?php echo CHtml::encode($data->getAttributeLabel('mode')); ?>:</b>
        <?php echo CHtml::encode($data->mode); ?>
        <br />

        <b><?php echo CHtml::encode($data->getAttributeLabel('qthr')); ?>:</b>
        <?php echo CHtml::encode($data->qthr); ?>
        <br />

        <b><?php echo CHtml::encode($data->getAttributeLabel('location')); ?>:</b>
        <?php echo CHtml::encode($data->location); ?>
        <br />

        <b><?php echo CHtml::encode($data->getAttributeLabel('ngr')); ?>:</b>
        <?php echo CHtml::encode($data->ngr); ?>
        <br />

        <b><?php echo CHtml::encode($data->getAttributeLabel('reg')); ?>:</b>
        <?php echo CHtml::encode($data->reg); ?>
        <br />

        <b><?php echo CHtml::encode($data->getAttributeLabel('ctcss')); ?>:</b>
        <?php echo CHtml::encode($data->ctcss); ?>
        <br />

        <b><?php echo CHtml::encode($data->getAttributeLabel('keeper')); ?>:</b>
        <?php echo CHtml::encode($data->keeper); ?>
        <br />

        <b><?php echo CHtml::encode($data->getAttributeLabel('lat')); ?>:</b>
        <?php echo CHtml::encode($data->lat); ?>
        <br />

        <b><?php echo CHtml::encode($data->getAttributeLabel('long')); ?>:</b>
        <?php echo CHtml::encode($data->long); ?>
        <br />

        <b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
        <?php echo CHtml::encode($data->status); ?>
        <br />

        */ ?>
    </div>
    <div style="clear:both;"></div>
</a>