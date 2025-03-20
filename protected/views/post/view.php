<?php
/* @var $this PostController */
/* @var $model Post */

$this->breadcrumbs=array(
    'Posts'=>array('index'),
    $model->title,
);

$this->menu=array(
    array('label'=>'📋 List Posts', 'url'=>array('index')),
    array('label'=>'✨ Create Post', 'url'=>array('create')),
    array('label'=>'📝 Update Post', 'url'=>array('update', 'id'=>$model->id)),
    array('label'=>'❌ Delete Post', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
    array('label'=>'🛠 Manage Posts', 'url'=>array('admin')),
);
?>

<div class="bg-pink-50 p-8 rounded-xl shadow-lg border-2 border-pink-200 max-w-4xl mx-auto mt-6">
    <h1 class="text-4xl font-bold text-pink-600 text-center mb-6">📖 View Post #<?php echo $model->id; ?> 💕</h1>

    <?php $this->widget('zii.widgets.CDetailView', array(
        'data'=>$model,
        'htmlOptions'=>array('class'=>'table-auto border-collapse w-full'),
        'attributes'=>array(
            'id',
            'title',
            array(
                'name'=>'content',
                'type'=>'raw',
                'value'=>"<div class='p-4 bg-white rounded-lg shadow-md border-l-4 border-pink-300'>" . nl2br(CHtml::encode($model->content)) . "</div>",
            ),
            'tags',
            array(
                'name'=>'status',
                'type'=>'raw',
                'value'=>"<span class='text-pink-500'>" . Lookup::item("PostStatus", $model->status) . "</span>",
            ),
            'create_time',
            'update_time',
            'author_id',
        ),
    )); ?>
</div>

<!-- Comments Section -->
<div class="bg-white p-6 mt-8 rounded-xl shadow-lg border-2 border-pink-200 max-w-4xl mx-auto">
    <?php if($model->commentCount >= 1): ?>
        <h3 class="text-2xl font-semibold text-pink-600 mb-4">
            💬 <?php echo $model->commentCount . ' Comment(s)'; ?>
        </h3>

        <?php $this->renderPartial('_comments', array(
            'post'=>$model,
            'comments'=>$model->comments,
        )); ?>
    <?php endif; ?>

    <h3 class="text-2xl font-semibold text-pink-600 mt-6">💖 Leave a Comment</h3>

    <?php if(Yii::app()->user->hasFlash('commentSubmitted')): ?>
        <div class="flash-success p-4 mt-3 text-white bg-pink-500 rounded-lg shadow-md">
            <?php echo Yii::app()->user->getFlash('commentSubmitted'); ?>
        </div>
    <?php else: ?>
        <div class="mt-4">
            <?php $this->renderPartial('/comment/_form', array('model'=>$comment)); ?>
        </div>
    <?php endif; ?>
</div>
