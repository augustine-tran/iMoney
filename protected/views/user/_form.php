<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'user_email'); ?>
		<?php echo $form->textField($model,'user_email',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'user_email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_password'); ?>
		<?php echo $form->textField($model,'user_password',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'user_password'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_fname'); ?>
		<?php echo $form->textField($model,'user_fname',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'user_fname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_lname'); ?>
		<?php echo $form->textField($model,'user_lname',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'user_lname'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->