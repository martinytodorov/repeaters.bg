<?php
/* @var $this RepeaterController */
/* @var $model Repeater */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'repeater-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
        <?php echo $form->labelEx($model,'callsign'); ?>
        <?php echo $form->textArea($model,'callsign',array('rows'=>1, 'cols'=>50)); ?>
        <?php echo $form->error($model,'callsign'); ?>
	</div>

    <div class="row">
        <div class="column row-left">
            <?php echo $form->labelEx($model,'band'); ?>
            <?php echo $form->dropDownList($model,'band',
                $model->repeaterBands(),
                array('prompt'=>'Select a Band'));
            ?>
            <?php echo $form->error($model,'band'); ?>
        </div>
        <div class="column">
            <?php echo $form->labelEx($model,'mode'); ?>
            <?php echo $form->dropDownList($model,'mode',
                $model->repeaterModes(),
                array('prompt'=>'Select a Mode'));
            ?>
            <?php echo $form->error($model,'mode'); ?>
        </div>
    </div>

	<div class="row">
		<?php echo $form->labelEx($model,'channel'); ?>
		<?php echo $form->textArea($model,'channel',array('rows'=>1, 'cols'=>50)); ?>
		<?php echo $form->error($model,'channel'); ?>
	</div>

	<div class="row">
        <div class="column row-left">
            <?php echo $form->labelEx($model,'out'); ?>
            <?php echo $form->textArea($model,'out',array('rows'=>1, 'cols'=>23)); ?>
            <?php echo $form->error($model,'out'); ?>
        </div>

        <div class="column">
            <?php echo $form->labelEx($model,'in'); ?>
            <?php echo $form->textArea($model,'in',array('rows'=>1, 'cols'=>23)); ?>
            <?php echo $form->error($model,'in'); ?>
        </div>
        <div style="clear:both;"></div>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'blank'); ?>
		<?php echo $form->textArea($model,'blank',array('rows'=>1, 'cols'=>50)); ?>
		<?php echo $form->error($model,'blank'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'qthr'); ?>
		<?php echo $form->textArea($model,'qthr',array('rows'=>1, 'cols'=>50)); ?>
		<?php echo $form->error($model,'qthr'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'location'); ?>
		<?php echo $form->textArea($model,'location',array('rows'=>2, 'cols'=>50)); ?>
		<?php echo $form->error($model,'location'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ngr'); ?>
		<?php echo $form->textArea($model,'ngr',array('rows'=>1, 'cols'=>50)); ?>
		<?php echo $form->error($model,'ngr'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'reg'); ?>
		<?php echo $form->textArea($model,'reg',array('rows'=>1, 'cols'=>50)); ?>
		<?php echo $form->error($model,'reg'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ctcss'); ?>
		<?php echo $form->textArea($model,'ctcss',array('rows'=>1, 'cols'=>50)); ?>
		<?php echo $form->error($model,'ctcss'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'keeper'); ?>
		<?php echo $form->textArea($model,'keeper',array('rows'=>1, 'cols'=>50)); ?>
		<?php echo $form->error($model,'keeper'); ?>
	</div>

	<div class="row">
        <div class="column row-left">
            <?php echo $form->labelEx($model,'lat'); ?>
            <?php echo $form->textArea($model,'lat',array('rows'=>1, 'cols'=>23)); ?>
            <?php echo $form->error($model,'lat'); ?>
        </div>

        <div class="column">
            <?php echo $form->labelEx($model,'long'); ?>
            <?php echo $form->textArea($model,'long',array('rows'=>1, 'cols'=>23)); ?>
            <?php echo $form->error($model,'long'); ?>
        </div>
        <div style="clear:both;"></div>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
        <?php echo $form->dropDownList($model,'status',
            $model->repeaterNumberStatuses(),
            array('prompt'=>'Select a Status'));
        ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->