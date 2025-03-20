<?php
/* @var $this PostController */
/* @var $model Post */
/* @var $form CActiveForm */
?>

<div class="form max-w-3xl mx-auto p-6 bg-white shadow-md rounded-lg">

<?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'comment-form',
    'enableAjaxValidation'=>false,
)); ?>
	<p class="note text-sm text-gray-600">Fields with <span class="required text-red-500">*</span> are required.</p>

	<?php echo $form->errorSummary($model, null, null, array('class' => 'text-red-500 text-sm mb-4')); ?>

	<div class="row mb-4">
		<?php echo $form->labelEx($model,'title', array('class' => 'block text-sm font-semibold text-gray-700')); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>128, 'class' => 'mt-1 p-2 w-full border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-500')); ?>
		<?php echo $form->error($model,'title', array('class' => 'text-red-500 text-xs mt-1')); ?>
	</div>

	<div class="row mb-4">
		<?php echo $form->labelEx($model,'content', array('class' => 'block text-sm font-semibold text-gray-700')); ?>
		<?php echo $form->textArea($model,'content',array('rows'=>6, 'cols'=>50, 'class' => 'mt-1 p-2 w-full border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-500')); ?>
		<?php echo $form->error($model,'content', array('class' => 'text-red-500 text-xs mt-1')); ?>
	</div>

	<div class="row mb-4">
		<?php echo $form->labelEx($model,'tags', array('class' => 'block text-sm font-semibold text-gray-700')); ?>
		<?php echo $form->textArea($model,'tags',array('rows'=>6, 'cols'=>50, 'class' => 'mt-1 p-2 w-full border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-500')); ?>
		<?php echo $form->error($model,'tags', array('class' => 'text-red-500 text-xs mt-1')); ?>
	</div>

	<div class="row mb-4">
		<?php echo $form->labelEx($model,'status', array('class' => 'block text-sm font-semibold text-gray-700')); ?>
		<?php echo $form->dropDownList($model,'status', Lookup::items('PostStatus'), array('class' => 'mt-1 p-2 w-full border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-500')); ?>
		<?php echo $form->error($model,'status', array('class' => 'text-red-500 text-xs mt-1')); ?>
	</div>

	<div class="row mb-4">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array(
            'class' => 'w-full bg-pink-600 text-white font-semibold p-3 rounded-lg shadow-md hover:bg-pink-700 transition-colors duration-300'
        )); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
