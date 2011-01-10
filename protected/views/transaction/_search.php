<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'trans_id'); ?>
		<?php echo $form->textField($model,'trans_id',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'trans_created'); ?>
		<?php echo $form->textField($model,'trans_created'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'trans_type'); ?>
		<?php echo $form->textField($model,'trans_type',array('size'=>7,'maxlength'=>7)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'trans_amount'); ?>
		<?php echo $form->textField($model,'trans_amount'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'trans_comment'); ?>
		<?php echo $form->textField($model,'trans_comment',array('size'=>60,'maxlength'=>145)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'account_account_id'); ?>
		<?php echo $form->textField($model,'account_account_id',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_user_id'); ?>
		<?php echo $form->textField($model,'user_user_id',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->