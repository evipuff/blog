<ul class="space-y-4 bg-pink-50 p-4 rounded-lg shadow-lg">
  <?php foreach($this->getRecentComments() as $comment): ?>
    <li class="bg-white p-3 rounded-lg shadow-md hover:shadow-xl transition-all duration-200">
      <div class="flex items-center justify-between">
        <span class="text-pink-600 font-semibold">
          <?php echo $comment->authorLink; ?>
        </span>
      </div>
      <p class="text-gray-700 mt-2">
        <?php echo CHtml::link(CHtml::encode($comment->post->title), $comment->getUrl(), array(
          'class' => 'text-pink-500 hover:text-pink-700 font-semibold'
        )); ?>
      </p>
    </li>
  <?php endforeach; ?>
</ul>
