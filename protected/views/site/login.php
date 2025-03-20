<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>

<div class="max-w-sm mx-auto bg-pink-100 p-8 rounded-lg shadow-lg mt-12">
    <h1 class="text-4xl font-extrabold text-center text-pink-600 mb-6 sparkle">Login</h1>

    <p class="text-center text-gray-700 mb-6">Fill out the form below to join the fun!</p>

    <div class="form">
    <?php $form=$this->beginWidget('CActiveForm', array(
        'id'=>'login-form',
        'enableClientValidation'=>true,
        'clientOptions'=>array(
            'validateOnSubmit'=>true,
        ),
    )); ?>

    <p class="note text-sm text-gray-600 mb-4">Fields with <span class="required text-pink-500">*</span> are required.</p>

    <div class="mb-4">
        <?php echo $form->labelEx($model, 'username', array('class' => 'block text-sm font-semibold text-pink-500 mb-2')); ?>
        <?php echo $form->textField($model, 'username', array('class' => 'w-full p-3 border border-pink-300 rounded-md focus:outline-none focus:ring-2 focus:ring-pink-500')); ?>
        <?php echo $form->error($model, 'username', array('class' => 'text-sm text-pink-500 mt-1')); ?>
    </div>

    <div class="mb-4">
        <?php echo $form->labelEx($model, 'password', array('class' => 'block text-sm font-semibold text-pink-500 mb-2')); ?>
        <?php echo $form->passwordField($model, 'password', array('class' => 'w-full p-3 border border-pink-300 rounded-md focus:outline-none focus:ring-2 focus:ring-pink-500')); ?>
        <?php echo $form->error($model, 'password', array('class' => 'text-sm text-pink-500 mt-1')); ?>
        <p class="text-sm text-gray-600 mt-2">
            Hint: You may login with <kbd class="bg-pink-200 p-1 rounded">demo</kbd>/<kbd class="bg-pink-200 p-1 rounded">demo</kbd> or <kbd class="bg-pink-200 p-1 rounded">admin</kbd>/<kbd class="bg-pink-200 p-1 rounded">admin</kbd>.
        </p>
    </div>

    <div class="flex items-center mb-6">
        <div class="mr-2">
            <?php echo $form->checkBox($model, 'rememberMe', array('class' => 'h-5 w-5 text-pink-500')); ?>
        </div>
        <div>
            <?php echo $form->label($model, 'rememberMe', array('class' => 'text-sm text-pink-500')); ?>
        </div>
        <?php echo $form->error($model, 'rememberMe', array('class' => 'text-sm text-pink-500 mt-1')); ?>
    </div>

    <div class="text-center">
        <?php echo CHtml::submitButton('Login', array('class' => 'w-full py-3 bg-pink-500 text-white rounded-md hover:bg-pink-600 focus:outline-none')); ?>
    </div>

    <?php $this->endWidget(); ?>
    </div><!-- form -->
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
    @keyframes sparkleAnimation {
        0% { opacity: 1; transform: rotate(0deg); }
        50% { opacity: 0.6; transform: rotate(45deg); }
        100% { opacity: 1; transform: rotate(0deg); }
    }
</style>
