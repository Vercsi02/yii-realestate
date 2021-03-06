<?php
/* @var $this RealEstateController */
/* @var $model RealEstate */

$this->breadcrumbs=array(
	'Real Estates'=>array('index'),
	$model->id_real_estate,
);

$this->menu=array(
	array('label'=>'List RealEstate', 'url'=>array('index')),
	array('label'=>'Create RealEstate', 'url'=>array('create')),
	array('label'=>'Update RealEstate', 'url'=>array('update', 'id'=>$model->id_real_estate)),
	array('label'=>'Delete RealEstate', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_real_estate),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage RealEstate', 'url'=>array('admin')),
	array('label'=>'RealEstate Folders', 'url'=>array('folder/index', 're_id'=>$model->id_real_estate)),
);
?>

<h1>View RealEstate #<?php echo $model->id_real_estate; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_real_estate',
		'creation_date',
		'description',
		'adress',
		'type',
		'status',
		'state',
	),
)); ?>
