<?php
/* @var $this PostController */
/* @var $model Post */
/* @var $form CActiveForm */
?>

<div class="bg-white p-6 rounded-lg shadow-lg max-w-lg mx-auto">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<p class="text-gray-600 mb-4">Search for posts by the fields below:</p>

	<div class="mb-4">
		<?php echo $form->label($model,'id', array('class' => 'block text-sm font-medium text-gray-700')); ?>
		<?php echo $form->textField($model,'id', array('class' => 'mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-pink-500 focus:border-pink-500')); ?>
	</div>

	<div class="mb-4">
		<?php echo $form->label($model,'title', array('class' => 'block text-sm font-medium text-gray-700')); ?>
		<?php echo $form->textField($model,'title', array('size'=>60,'maxlength'=>128, 'class' => 'mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-pink-500 focus:border-pink-500')); ?>
	</div>

	<div class="mb-4">
		<?php echo $form->label($model,'content', array('class' => 'block text-sm font-medium text-gray-700')); ?>
		<?php echo $form->textArea($model,'content', array('rows'=>6, 'cols'=>50, 'class' => 'mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-pink-500 focus:border-pink-500')); ?>
	</div>

	<div class="mb-4">
		<?php echo $form->label($model,'tags', array('class' => 'block text-sm font-medium text-gray-700')); ?>
		<?php echo $form->textArea($model,'tags', array('rows'=>6, 'cols'=>50, 'class' => 'mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-pink-500 focus:border-pink-500')); ?>
	</div>

	<div class="mb-4">
		<?php echo $form->label($model,'status', array('class' => 'block text-sm font-medium text-gray-700')); ?>
		<?php echo $form->textField($model,'status', array('class' => 'mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-pink-500 focus:border-pink-500')); ?>
	</div>

	<div class="mb-4">
		<?php echo $form->label($model,'create_time', array('class' => 'block text-sm font-medium text-gray-700')); ?>
		<?php echo $form->textField($model,'create_time', array('class' => 'mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-pink-500 focus:border-pink-500')); ?>
	</div>

	<div class="mb-4">
		<?php echo $form->label($model,'update_time', array('class' => 'block text-sm font-medium text-gray-700')); ?>
		<?php echo $form->textField($model,'update_time', array('class' => 'mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-pink-500 focus:border-pink-500')); ?>
	</div>

	<div class="mb-4">
		<?php echo $form->label($model,'author_id', array('class' => 'block text-sm font-medium text-gray-700')); ?>
		<?php echo $form->textField($model,'author_id', array('class' => 'mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-pink-500 focus:border-pink-500')); ?>
	</div>

	<div class="mb-4">
		<?php echo CHtml::submitButton('Search', array('class' => 'w-full bg-pink-500 text-white py-2 rounded-md hover:bg-pink-600 transition-colors duration-200')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
