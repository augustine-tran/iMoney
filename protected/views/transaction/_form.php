<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'transaction-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'trans_type'); ?>
		<?php echo $form->dropDownList($model,'trans_type', $model->getTransactionTypeOptions()); ?>
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
		<?php echo $form->dropDownList($model,'account_account_id',$model->getAccountOptions(), array('empty' => '--'));?>
		<?php echo $form->error($model,'account_account_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->hiddenField($model,'user_user_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->