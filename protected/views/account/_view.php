<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('account_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->account_id), array('view', 'id'=>$data->account_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('account_name')); ?>:</b>
	<?php echo CHtml::encode($data->account_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('account_balance')); ?>:</b>
	<?php echo CHtml::encode($data->account_balance); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('account_type')); ?>:</b>
	<?php echo CHtml::encode($data->account_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_user_id')); ?>:</b>
	<?php echo CHtml::encode($data->user_user_id); ?>
	<br />


</div>