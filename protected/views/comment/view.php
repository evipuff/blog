<?php
/* @var $this CommentController */
/* @var $model Comment */

$this->breadcrumbs=array(
	'Comments'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Comment', 'url'=>array('index')),
	// array('label'=>'Create Comment', 'url'=>array('create')),
	array('label'=>'Update Comment', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Comment', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Comment', 'url'=>array('admin')),
);
?>

<h1 class="text-3xl font-semibold text-pink-600 mb-4">View Comment #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
    'data'=>$model,
    'attributes'=>array(
        'id',
        array(
            'name'=>'content',
            'type'=>'raw',
            'value'=>"<p class='italic text-pink-500'>" . CHtml::encode($model->content) . "</p>", // Add italics and soft pink color
        ),
        array(
            'name'=>'status',
            'type'=>'raw', // This ensures the HTML is rendered correctly
            'value'=>"<span class='text-pink-500'>" . CHtml::encode(Lookup::item("CommentStatus", $model->status)) . "</span>",
        ),        
        'create_time',
        'author',
        'email',
        'url',
        'post_id',
    ),
    'htmlOptions'=>array(
        'class'=>'bg-pink-50 p-6 rounded-lg shadow-xl border-2 border-pink-200',
    ),
)); ?>
