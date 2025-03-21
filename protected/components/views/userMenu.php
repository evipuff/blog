<ul class="bg-pink-100 p-4 rounded-lg shadow-md space-y-3 w-64">
    <li>
        <?php echo CHtml::link('<i class="fas fa-pencil-alt"></i> Create New Post', array('post/create'), array(
            'class' => 'flex items-center gap-2 text-pink-700 font-semibold py-2 px-4 bg-pink-200 hover:bg-pink-300 rounded-lg transition-all duration-200'
        )); ?>
    </li>
    <li>
        <?php echo CHtml::link('<i class="fas fa-list"></i> Manage Posts', array('post/admin'), array(
            'class' => 'flex items-center gap-2 text-pink-700 font-semibold py-2 px-4 bg-pink-200 hover:bg-pink-300 rounded-lg transition-all duration-200'
        )); ?>
    </li>

    <li>
        <?php echo CHtml::link('<i class="fas fa-comments"></i> Manage Comments', array('comment/admin'), array(
            'class' => 'flex items-center gap-2 text-blue-700 font-semibold py-2 px-4 bg-blue-200 hover:bg-blue-300 rounded-lg transition-all duration-200'
        )); ?>
    </li>


    <li>
        <?php echo CHtml::link('<i class="fas fa-comments"></i> Approve Comments (' . Comment::model()->pendingCommentCount . ')', array('comment/index'), array(
            'class' => 'flex items-center gap-2 text-pink-700 font-semibold py-2 px-4 bg-pink-200 hover:bg-pink-300 rounded-lg transition-all duration-200'
        )); ?>
    </li>

    
    <li>
        <?php echo CHtml::link('<i class="fas fa-sign-out-alt"></i> Logout', array('site/logout'), array(
            'class' => 'flex items-center gap-2 text-white font-semibold py-2 px-4 bg-pink-500 hover:bg-pink-600 rounded-lg transition-all duration-200'
        )); ?>
    </li>
</ul>