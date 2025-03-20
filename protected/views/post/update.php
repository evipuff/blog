<?php
/* @var $this PostController */
/* @var $model Post */

$this->breadcrumbs = array(
    'Posts' => array('index'),
    $model->title => array('view', 'id' => $model->id),
    'Update',
);

$this->menu = array(
    array('label' => 'List Post', 'url' => array('index')),
    array('label' => 'Create Post', 'url' => array('create')),
    array('label' => 'View Post', 'url' => array('view', 'id' => $model->id)),
    array('label' => 'Manage Post', 'url' => array('admin')),
);
?>

<div class="max-w-4xl mx-auto bg-white p-6 rounded-lg shadow-lg mt-6">
    <h1 class="text-3xl font-semibold text-gray-800 mb-4">
        Update Post <?php echo $model->id; ?>
    </h1>

    <?php $this->renderPartial('_form', array('model' => $model)); ?>
</div>
