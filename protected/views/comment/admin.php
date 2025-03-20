<?php
/* @var $this CommentController */
/* @var $model Comment */

$this->breadcrumbs = array(
    'Manage Comments',
);

$this->menu = array(
    array('label' => '📋 List Comments', 'url' => array('index')),
    // array('label' => '✨ Create Comment', 'url' => array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
    $('.search-form').toggle();
    return false;
});
$('.search-form form').submit(function(){
    $('#comment-grid').yiiGridView('update', {
        data: $(this).serialize()
    });
    return false;
});
");
?>

<div class="mb-6">
    <h1 class="text-3xl font-bold text-gray-900">📌 Manage Comments</h1>
</div>

<p class="text-md text-pink-500">
    You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b> or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button text-pink-600 font-bold')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'comment-grid',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'itemsCssClass' => 'table-auto w-full border-collapse border border-gray-300 rounded-lg shadow-md',
    'columns' => array(
        array(
            'name' => 'content',
            'type' => 'raw',
            'value' => 'CHtml::encode($data->content)',
            'headerHtmlOptions' => array('class' => 'px-4 py-2 bg-gray-200 text-gray-800'),
            'htmlOptions' => array('class' => 'px-4 py-2 text-gray-900'),
        ),
        array(
			'name' => 'status',
			'type' => 'raw',
			'value' => 'CHtml::tag("span", array(
				"class" => $data->status == 2 
					? "bg-green-200 text-green-800 px-2 py-1 rounded" // Approved (Green)
					: "bg-yellow-200 text-yellow-800 px-2 py-1 rounded" // Pending Approval (Yellow)
			), Lookup::item("CommentStatus", $data->status))',
			'filter' => Lookup::items('CommentStatus'),
			'headerHtmlOptions' => array('class' => 'px-4 py-2 bg-gray-200 text-gray-800'),
			'htmlOptions' => array('class' => 'px-4 py-2 text-gray-900'),
		),
        array(
            'name' => 'create_time',
            'type' => 'datetime',
            'filter' => false,
            'headerHtmlOptions' => array('class' => 'px-4 py-2 bg-gray-200 text-gray-800'),
            'htmlOptions' => array('class' => 'px-4 py-2 text-gray-900'),
        ),
        array(
            'name' => 'author',
            'headerHtmlOptions' => array('class' => 'px-4 py-2 bg-gray-200 text-gray-800'),
            'htmlOptions' => array('class' => 'px-4 py-2 text-gray-900'),
        ),
        array(
            'name' => 'email',
            'headerHtmlOptions' => array('class' => 'px-4 py-2 bg-gray-200 text-gray-800'),
            'htmlOptions' => array('class' => 'px-4 py-2 text-gray-900'),
        ),
        array(
            'class' => 'CButtonColumn',
            'headerHtmlOptions' => array('class' => 'px-4 py-2 bg-gray-200 text-gray-800'),
            'htmlOptions' => array('class' => 'px-4 py-2 text-gray-900'),
        ),
    ),
)); ?>
