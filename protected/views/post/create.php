<?php
/* @var $this PostController */
/* @var $model Post */

$this->breadcrumbs = array(
    'Posts' => array('index'),
    'Create',
);

$this->menu = array(
    array('label' => 'List Post', 'url' => array('index')),
    array('label' => 'Manage Post', 'url' => array('admin')),
);
?>

<div class="mb-6">
    <h1 class="text-3xl font-bold text-gray-800">Create Post 📝</h1>
</div>

<div class="bg-white p-6 rounded-lg shadow-md">
    <?php $this->renderPartial('_form', array('model' => $model)); ?>
</div>
