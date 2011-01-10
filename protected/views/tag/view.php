<?php
$this->breadcrumbs=array(
	'Tags'=>array('index'),
	$model->tag_id,
);

$this->menu=array(
	array('label'=>'List Tag', 'url'=>array('index')),
	array('label'=>'Create Tag', 'url'=>array('create')),
	array('label'=>'Update Tag', 'url'=>array('update', 'id'=>$model->tag_id)),
	array('label'=>'Delete Tag', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->tag_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Tag', 'url'=>array('admin')),
);
?>

<h1>View Tag #<?php echo $model->tag_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'tag_id',
		'tag_name',
	),
)); ?>
