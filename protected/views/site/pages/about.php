<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<div id="content" class="index-content bg-pink-50 p-8 rounded-lg shadow-lg mt-12">
    <h1 class="text-4xl font-extrabold text-center text-pink-600 mb-6 sparkle">
        About <i><?php echo CHtml::encode(Yii::app()->name); ?></i>
    </h1>

    <p class="text-center text-lg text-gray-700 mb-6">
        This is a "static" page. You may change the content of this page by modifying the file <code class="text-pink-500"><?php echo __FILE__; ?></code>.
    </p>

    <p class="text-center text-lg text-gray-700 mb-6">
        You may also update the layout file: <code class="text-pink-500"><?php echo $this->getLayoutFile('main'); ?></code>.
    </p>

    <p class="text-center text-lg text-gray-700 mb-6">
        For more details on how to further develop this application, please read the <a href="https://www.yiiframework.com/doc/" class="text-pink-500 underline hover:text-pink-600">documentation</a>.
        Feel free to ask in the <a href="https://www.yiiframework.com/forum/" class="text-pink-500 underline hover:text-pink-600">forum</a>,
        should you have any questions.
    </p>
</div>

<style>
    .sparkle {
        position: relative;
        color: #D53F8C;
    }
    .sparkle::after {
        content: '✨';
        font-size: 2rem;
        position: absolute;
        top: -10px;
        right: -10px;
        animation: sparkleAnimation 1s infinite;
    }

    /* @keyframes sparkleAnimation {
        0% { opacity: 1; transform: rotate(0deg); }
        50% { opacity: 0.6; transform: rotate(45deg); }
        100% { opacity: 1; transform: rotate(0deg); }
    } */
</style>
