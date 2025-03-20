<?php
/* @var $this CommentController */
/* @var $data Comment */
?>

<div class="view bg-pink-50 p-6 rounded-lg shadow-xl mb-6 border-2 border-pink-200">
    <div class="text-2xl font-bold text-pink-600 mb-4">
        <b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
        <?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id), ['class' => 'text-pink-800 hover:text-pink-600']); ?>
    </div>

    <div class="text-md text-gray-700 mb-3">
        <b><?php echo CHtml::encode($data->getAttributeLabel('content')); ?>:</b>
        <p class="italic text-pink-500"><?php echo CHtml::encode($data->content); ?></p>
    </div>

    <div class="text-md text-gray-700 mb-3">
        <b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
        <span class="text-pink-500"><?php echo CHtml::encode(Lookup::item("CommentStatus", $data->status)); ?></span>
    </div>

    <div class="text-md text-gray-700 mb-3">
        <b><?php echo CHtml::encode($data->getAttributeLabel('create_time')); ?>:</b>
        <span class="text-pink-400"><?php echo CHtml::encode($data->create_time); ?></span>
    </div>

    <div class="text-md text-gray-700 mb-3">
        <b><?php echo CHtml::encode($data->getAttributeLabel('author')); ?>:</b>
        <span class="text-pink-400"><?php echo CHtml::encode($data->author); ?></span>
    </div>

    <div class="text-md text-gray-700 mb-3">
        <b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
        <span class="text-pink-400"><?php echo CHtml::encode($data->email); ?></span>
    </div>

    <div class="text-md text-gray-700 mb-3">
        <b><?php echo CHtml::encode($data->getAttributeLabel('url')); ?>:</b>
        <span class="text-pink-400"><?php echo CHtml::encode($data->url); ?></span>
    </div>
</div>
