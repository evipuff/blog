<?php
/* @var $this PostController */
/* @var $data Post */
?>

<div class="view bg-pink-50 p-6 rounded-lg shadow-xl mb-6 border-2 border-pink-200">

    <!-- Post ID -->
    <div class="text-2xl font-bold text-pink-600 mb-4">
        <b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
        <?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id), ['class' => 'text-pink-800 hover:text-pink-600']); ?>
    </div>

    <!-- Post Title -->
    <div class="text-2xl font-semibold text-pink-500 mb-4">
        <b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b>
        <p class="text-lg text-gray-800"><?php echo CHtml::encode($data->title); ?></p>
    </div>

    <!-- Post Content -->
    <div class="text-md text-gray-700 mb-4">
        <b><?php echo CHtml::encode($data->getAttributeLabel('content')); ?>:</b>
        <p class="italic text-pink-500"><?php echo CHtml::encode($data->content); ?></p>
    </div>

    <!-- Tags -->
    <div class="text-md text-gray-700 mb-4">
        <b><?php echo CHtml::encode($data->getAttributeLabel('tags')); ?>:</b>
        <p class="text-pink-500"><?php echo CHtml::encode($data->tags); ?></p>
    </div>

    <!-- Post Status -->
    <div class="text-md text-gray-700 mb-4">
        <b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
        <span class="text-pink-400"><?php echo CHtml::encode($data->status); ?></span>
    </div>

    <!-- Creation Time -->
    <div class="text-md text-gray-700 mb-4">
        <b><?php echo CHtml::encode($data->getAttributeLabel('create_time')); ?>:</b>
        <span class="text-pink-400"><?php echo CHtml::encode($data->create_time); ?></span>
    </div>

    <!-- Update Time -->
    <div class="text-md text-gray-700 mb-4">
        <b><?php echo CHtml::encode($data->getAttributeLabel('update_time')); ?>:</b>
        <span class="text-pink-400"><?php echo CHtml::encode($data->update_time); ?></span>
    </div>

    <!-- Author -->
    <div class="text-md text-gray-700 mb-4">
        <b><?php echo CHtml::encode($data->getAttributeLabel('author_id')); ?>:</b>
        <span class="text-pink-400"><?php echo CHtml::encode($data->author_id); ?></span>
    </div>

</div>
