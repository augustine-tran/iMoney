<?php
$this->breadcrumbs=array(
	'Transactions'=>array('index'),
	$model->trans_id,
);

$this->menu=array(
	array('label'=>'List Transaction', 'url'=>array('index')),
	array('label'=>'Create Transaction', 'url'=>array('create')),
	array('label'=>'Update Transaction', 'url'=>array('update', 'id'=>$model->trans_id)),
	array('label'=>'Delete Transaction', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->trans_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Transaction', 'url'=>array('admin')),
);
?>

<h1>View Transaction #<?php echo $model->trans_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'trans_id',
		'trans_created',
		array('name' => 'trans_type', 'value' => CHtml::encode($model->getTransactionTypeText())),
		'trans_amount',
		'trans_comment',
		array('name' => 'account_account_id', 'value' => CHtml::encode($model->account->account_name)),
	),
)); ?>
