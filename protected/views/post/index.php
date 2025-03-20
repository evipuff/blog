<?php
/* @var $this PostController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs = array(
    'Posts',
);

$this->menu = array(
    array('label' => '💖 Create a Post', 'url' => array('create')),
    array('label' => '📂 Manage All Posts', 'url' => array('admin')),
);
?>

<div class="mb-6 text-center">
    <?php if (!empty($_GET['tag'])): ?>
        <h1 class="text-3xl font-extrabold text-pink-500">
            💕 Posts Tagged with 
            <span class="bg-pink-100 text-pink-600 px-3 py-1 rounded-full shadow-md">
                <?php echo CHtml::encode($_GET['tag']); ?>
            </span>
        </h1>
    <?php else: ?>
        <h1 class="text-3xl font-extrabold text-pink-500">Posts ✨</h1>
    <?php endif; ?>
</div>

<div class="bg-pink-50 p-6 rounded-lg shadow-2xl border-2 border-pink-300">
    <?php $this->widget('zii.widgets.CListView', array(
        'dataProvider' => $dataProvider,
        'itemView' => '_view',
        'template' => "{items}\n{pager}",
    )); ?>
</div>
