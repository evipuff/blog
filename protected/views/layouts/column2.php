<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<div class="flex space-x-6">
    <!-- Main Content -->
    <div class="flex-1 p-6 bg-white rounded-lg shadow-xl">
        <div id="content">
            <?php echo $content; ?>
        </div><!-- content -->
    </div>

    <!-- Sidebar (Right Side) -->
    <div class="w-1/4 bg-pink-100 p-6 rounded-lg shadow-xl">
        <div id="sidebar">
            <?php if (!Yii::app()->user->isGuest) { ?>
                <div class="bg-pink-200 p-4 rounded-lg mb-6 shadow-md">
                    <?php $this->widget('UserMenu'); ?>
                </div>
            <?php } ?>

            <div class="bg-pink-200 p-4 rounded-lg mb-6 shadow-md">
                <?php $this->widget('TagCloud', array(
                    'maxTags' => Yii::app()->params['tagCloudCount'],
                )); ?>
            </div>

            <div class="bg-pink-200 p-4 rounded-lg mb-6 shadow-md">
                <?php $this->widget('RecentComments', array(
                    'maxComments' => Yii::app()->params['recentCommentCount'],
                )); ?>
            </div>
        </div><!-- sidebar -->
    </div>
</div>
<?php $this->endContent(); ?>
