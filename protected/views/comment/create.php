<?php
/* @var $this CommentController */
/* @var $model Comment */

$this->breadcrumbs=array(
    'Comments'=>array('index'),
    'Create',
);

$this->menu=array(
    array('label'=>'📜 List Comments', 'url'=>array('index')),
    array('label'=>'🛠 Manage Comments', 'url'=>array('admin')),
);
?>

<div class="bg-pink-50 p-8 rounded-xl shadow-lg border-2 border-pink-200 max-w-3xl mx-auto mt-6">
    <h1 class="text-4xl font-bold text-pink-600 text-center mb-6">✨ Create a New Comment ✨</h1>
    
    <?php $this->renderPartial('_form', array('model'=>$model)); ?>
</div>
