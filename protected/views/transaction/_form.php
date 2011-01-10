<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'transaction-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'trans_created'); ?>
		<?php echo $form->textField($model,'trans_created'); ?>
		<?php echo $form->error($model,'trans_created'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'trans_type'); ?>
		<?php echo $form->textField($model,'trans_type',array('size'=>7,'maxlength'=>7)); ?>
		<?php echo $form->error($model,'trans_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'trans_amount'); ?>
		<?php echo $form->textField($model,'trans_amount'); ?>
		<?php echo $form->error($model,'trans_amount'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'trans_comment'); ?>
		<?php echo $form->textField($model,'trans_comment',array('size'=>60,'maxlength'=>145)); ?>
		<?php echo $form->error($model,'trans_comment'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'account_account_id'); ?>
		<?php echo $form->textField($model,'account_account_id',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'account_account_id'); ?>
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