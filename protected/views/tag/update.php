<?php
$this->breadcrumbs=array(
	'Tags'=>array('index'),
	$model->tag_id=>array('view','id'=>$model->tag_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Tag', 'url'=>array('index')),
	array('label'=>'Create Tag', 'url'=>array('create')),
	array('label'=>'View Tag', 'url'=>array('view', 'id'=>$model->tag_id)),
	array('label'=>'Manage Tag', 'url'=>array('admin')),
);
?>

<h1>Update Tag <?php echo $model->tag_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>