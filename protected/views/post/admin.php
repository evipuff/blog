<?php
/* @var $this PostController */
/* @var $model Post */

$this->breadcrumbs = array(
    'Manage Posts',
);

$this->menu = array(
    array('label' => '📋 List Posts', 'url' => array('index')),
    array('label' => '✨ Create Post', 'url' => array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
    $('.search-form').toggle();
    return false;
});
$('.search-form form').submit(function(){
    $('#post-grid').yiiGridView('update', {
        data: $(this).serialize()
    });
    return false;
});
");
?>

<div class="mb-6">
    <h1 class="text-3xl font-bold text-gray-900">📌 Manage Posts</h1>
</div>

<?php $this->widget('zii.widgets.grid.CGridView', array(
    'dataProvider' => $model->search(),
    'filter' => $model,
    'itemsCssClass' => 'table-auto w-full border-collapse border border-gray-300 rounded-lg shadow-md',
    'columns' => array(
        array(
            'name' => 'title',
            'type' => 'raw',
            'value' => 'CHtml::link(CHtml::encode($data->title), $data->url, array("class" => "text-blue-500 hover:underline"))',
            'headerHtmlOptions' => array('class' => 'px-4 py-2 bg-gray-200 text-gray-800'),
            'htmlOptions' => array('class' => 'px-4 py-2 text-gray-900'),
        ),
        array(
            'name' => 'status',
            'type' => 'raw',
            'value' => 'CHtml::tag("span", array("class" => $data->status == 1 ? "bg-green-200 text-green-800 px-2 py-1 rounded" : "bg-red-200 text-red-800 px-2 py-1 rounded"), Lookup::item("PostStatus", $data->status))',
            'filter' => Lookup::items('PostStatus'),
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
            'class' => 'CButtonColumn',
            'headerHtmlOptions' => array('class' => 'px-4 py-2 bg-gray-200 text-gray-800'),
            'htmlOptions' => array('class' => 'px-4 py-2 text-gray-900'),
        ),
    ),
)); ?>
