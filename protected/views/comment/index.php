<?php
/* @var $this CommentController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
    'Comments',
);

$this->menu=array(
    // array('label'=>'💬 Create Comment', 'url'=>array('create')),
    array('label'=>'🛠 Manage Comments', 'url'=>array('admin')),
);
?>

<div class="bg-pink-50 p-8 rounded-xl shadow-lg border-2 border-pink-200 max-w-4xl mx-auto mt-6">
    <h1 class="text-4xl font-bold text-pink-600 text-center mb-6">All Comments 💖</h1>

    <?php $this->widget('zii.widgets.CListView', array(
        'dataProvider'=>$dataProvider,
        'itemView'=>'_view',
        'itemsCssClass'=>'space-y-4', // Adds spacing between comments
        'pagerCssClass'=>'text-center mt-4', // Centered pagination
    )); ?>
</div>
