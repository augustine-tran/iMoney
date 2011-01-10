<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->user_id), array('view', 'id'=>$data->user_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_email')); ?>:</b>
	<?php echo CHtml::encode($data->user_email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_password')); ?>:</b>
	<?php echo CHtml::encode($data->user_password); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_fname')); ?>:</b>
	<?php echo CHtml::encode($data->user_fname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_lname')); ?>:</b>
	<?php echo CHtml::encode($data->user_lname); ?>
	<br />


</div>