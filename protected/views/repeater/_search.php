<?php
/* @var $this RepeaterController */
/* @var $model Repeater */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
    'htmlOptions'=>array('class'=>'form-inline')
)); ?>
    <?php if (Yii::app()->user->isGuest == false): ?>
    <div class="form-group">
        <?php echo $form->label($model,'id', array('class'=>'sr-only')); ?>
        <?php echo $form->textField($model,'id',
            array('class'=>'form-control',
                'placeholder'=>$model->getAttributeLabel('id'))); ?>
    </div>
    <?php endif; ?>
    <div class="form-group">
        <?php echo $form->label($model,'callsign', array('class'=>'sr-only')); ?>
        <?php echo $form->textField($model,'callsign',
            array('class'=>'form-control',
                'placeholder'=>$model->getAttributeLabel('callsign'))); ?>
    </div>
    <div class="form-group">
        <?php echo $form->label($model,'band', array('class'=>'sr-only')); ?>
        <?php echo $form->dropDownList($model,'band',
            $model->repeaterBands(),
            array('prompt'=>'Select a '.$model->getAttributeLabel('band'), 'class'=>'form-control'));
        ?>
    </div>
    <div class="form-group">
        <?php echo $form->label($model,'mode', array('class'=>'sr-only')); ?>
        <?php echo $form->dropDownList($model,'mode',
            $model->repeaterModes(),
            array('prompt'=>'Select a '.$model->getAttributeLabel('mode'), 'class'=>'form-control'));
        ?>
    </div>
    <div class="form-group">
        <?php echo $form->label($model,'status', array('class'=>'sr-only')); ?>
        <?php echo $form->dropDownList($model,'status',
            $model->repeaterStatuses(),
            array('prompt'=>'Select a '.$model->getAttributeLabel('status'), 'class'=>'form-control'));
        ?>
    </div>
    <div class="form-group hidden-xs">
        <?php echo $form->label($model,'channel', array('class'=>'sr-only')); ?>
        <?php echo $form->textField($model,'channel',
            array('class'=>'form-control',
                'placeholder'=>$model->getAttributeLabel('channel'))); ?>
    </div>
    <div class="form-group">
        <?php echo $form->label($model,'out', array('class'=>'sr-only')); ?>
        <?php echo $form->textField($model,'out',
            array('class'=>'form-control',
                'placeholder'=>$model->getAttributeLabel('out'))); ?>
    </div>
    <div class="form-group">
        <?php echo $form->label($model,'in', array('class'=>'sr-only')); ?>
        <?php echo $form->textField($model,'in',
            array('class'=>'form-control',
                'placeholder'=>$model->getAttributeLabel('in'))); ?>
    </div>
    <div class="form-group hidden-xs">
        <?php echo $form->label($model,'qthr', array('class'=>'sr-only')); ?>
        <?php echo $form->textField($model,'qthr',
            array('class'=>'form-control',
                'placeholder'=>$model->getAttributeLabel('qthr'))); ?>
    </div>
    <div class="form-group">
        <?php echo $form->label($model,'location', array('class'=>'sr-only')); ?>
        <?php echo $form->textField($model,'location',
            array('class'=>'form-control form-location',
                'placeholder'=>$model->getAttributeLabel('location'))); ?>
    </div>

    <div class="form-group hidden-xs">
        <?php echo $form->label($model,'ngr', array('class'=>'sr-only')); ?>
        <?php echo $form->textField($model,'ngr',
            array('rows'=>1, 'cols'=>30, 'class'=>'form-control',
                'placeholder'=>$model->getAttributeLabel('ngr'))); ?>
    </div>

    <div class="form-group hidden-xs">
        <?php echo $form->label($model,'reg', array('class'=>'sr-only')); ?>
        <?php echo $form->textField($model,'reg',
            array('class'=>'form-control',
                'placeholder'=>$model->getAttributeLabel('reg'))); ?>
    </div>

    <div class="form-group hidden-xs">
        <?php echo $form->label($model,'ctcss', array('class'=>'sr-only')); ?>
        <?php echo $form->textField($model,'ctcss',
            array('class'=>'form-control',
                'placeholder'=>$model->getAttributeLabel('ctcss'))); ?>
    </div>
    <div class="form-group hidden-xs">
        <?php echo $form->label($model,'keeper', array('class'=>'sr-only')); ?>
        <?php echo $form->textField($model,'keeper',
            array('class'=>'form-control',
                'placeholder'=>$model->getAttributeLabel('keeper'))); ?>
    </div>
    <div class="form-group">
        <?php echo $form->label($model,'lat', array('class'=>'sr-only')); ?>
        <?php echo $form->textField($model,'lat',
            array('class'=>'form-control',
                'placeholder'=>$model->getAttributeLabel('lat'))); ?>
    </div>

    <div class="form-group">
        <?php echo $form->label($model,'long', array('class'=>'sr-only')); ?>
        <?php echo $form->textField($model,'long',
            array('class'=>'form-control',
                'placeholder'=>$model->getAttributeLabel('long'))); ?>
    </div>
    <div style="clear:both;"></div>

	<div class="row buttons">
        <div class="column">
		    <?php echo CHtml::submitButton('Search', array('class' => 'btn btn-default')); ?>
        </div>
        <div class="column">
            <?php echo CHtml::button('Reset', array('onclick' => 'js:document.location.href="index"', 'class' => 'btn btn-default')); ?>
        </div>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->