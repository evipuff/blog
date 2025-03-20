<?php foreach ($comments as $comment) : ?>

<!-- Comment Card (Girly Pop Style 🎀) -->
<div class="bg-pink-50 p-5 rounded-2xl shadow-lg mb-5 border-l-4 border-pink-400 relative hover:shadow-2xl transition-all duration-300">

    <!-- 💕 Author & Timestamp -->
    <div class="flex justify-between items-center mb-3">
        <span class="text-pink-700 font-semibold text-lg"><?= $comment->authorLink; ?></span>
        <span class="text-gray-500 text-sm italic"><?= date('F j, Y \a\t h:i a', $comment->create_time); ?></span>
    </div>

    <!-- ✨ Comment Content -->
    <div class="text-gray-800 font-serif text-md leading-relaxed">
        <?= nl2br(CHtml::encode($comment->content)); ?>
    </div>

    <!-- 🎀 Decorative Icon (for a chat bubble effect) -->
    <div class="absolute top-0 left-0 transform -translate-x-2 -translate-y-2">
        <svg class="w-6 h-6 text-pink-400" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd" d="M18 10c0 4.418-4.03 8-9 8a9.265 9.265 0 01-3.694-.756A1 1 0 004 18v-3a9.948 9.948 0 01-2-6c0-5.523 4.477-10 10-10s10 4.477 10 10z" clip-rule="evenodd"></path>
        </svg>
    </div>

</div>

<?php endforeach; ?>
