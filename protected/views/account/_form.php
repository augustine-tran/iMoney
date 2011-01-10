<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'account-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'account_name'); ?>
		<?php echo $form->textField($model,'account_name',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'account_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'account_balance'); ?>
		<?php echo $form->textField($model,'account_balance'); ?>
		<?php echo $form->error($model,'account_balance'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'account_type'); ?>
		<?php echo $form->textField($model,'account_type',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'account_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_user_id'); ?>
		<?php echo $form->textField($model,'user_user_id',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'user_user_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->