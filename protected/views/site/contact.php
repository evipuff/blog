<?php
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form CActiveForm */

$this->pageTitle=Yii::app()->name . ' - Contact Us';
$this->breadcrumbs=array(
    'Contact',
);
?>

<div id="content" class="contact-us-content bg-pink-50 p-8 rounded-lg shadow-lg mt-12">
    <h1 class="text-4xl font-extrabold text-center text-pink-600 mb-6 sparkle">
        Contact Us
    </h1>

    <?php if(Yii::app()->user->hasFlash('contact')): ?>

    <div class="flash-success bg-green-100 text-green-700 p-4 rounded-lg mb-6">
        <?php echo Yii::app()->user->getFlash('contact'); ?>
    </div>

    <?php else: ?>

    <p class="text-center text-lg text-gray-700 mb-6">
        If you have business inquiries or other questions, please fill out the following form to contact us. Thank you.
    </p>

    <div class="form">

    <?php $form=$this->beginWidget('CActiveForm', array(
        'id'=>'contact-form',
        'enableClientValidation'=>true,
        'clientOptions'=>array(
            'validateOnSubmit'=>true,
        ),
    )); ?>

    <p class="note text-center text-lg text-gray-600">
        Fields with <span class="required">*</span> are required.
    </p>

    <?php echo $form->errorSummary($model); ?>

    <div class="row mb-4">
        <?php echo $form->labelEx($model,'name'); ?>
        <?php echo $form->textField($model,'name', array('class' => 'form-input')); ?>
        <?php echo $form->error($model,'name'); ?>
    </div>

    <div class="row mb-4">
        <?php echo $form->labelEx($model,'email'); ?>
        <?php echo $form->textField($model,'email', array('class' => 'form-input')); ?>
        <?php echo $form->error($model,'email'); ?>
    </div>

    <div class="row mb-4">
        <?php echo $form->labelEx($model,'subject'); ?>
        <?php echo $form->textField($model,'subject', array('size'=>60,'maxlength'=>128, 'class' => 'form-input')); ?>
        <?php echo $form->error($model,'subject'); ?>
    </div>

    <div class="row mb-4">
        <?php echo $form->labelEx($model,'body'); ?>
        <?php echo $form->textArea($model,'body', array('rows'=>6, 'cols'=>50, 'class' => 'form-input')); ?>
        <?php echo $form->error($model,'body'); ?>
    </div>

    <?php if(CCaptcha::checkRequirements()): ?>
    <div class="row mb-4">
        <?php echo $form->labelEx($model,'verifyCode'); ?>
        <div class="flex items-center">
            <?php $this->widget('CCaptcha'); ?>
            <?php echo $form->textField($model,'verifyCode', array('class' => 'form-input')); ?>
        </div>
        <div class="hint text-sm text-gray-600">
            Please enter the letters as they are shown in the image above.
            <br/>Letters are not case-sensitive.
        </div>
        <?php echo $form->error($model,'verifyCode'); ?>
    </div>
    <?php endif; ?>

    <div class="row buttons text-center">
        <?php echo CHtml::submitButton('Submit', array('class' => 'submit-btn')); ?>
    </div>

    <?php $this->endWidget(); ?>

    </div><!-- form -->

    <?php endif; ?>
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

    .form-input {
        width: 100%;
        padding: 10px;
        border-radius: 8px;
        border: 1px solid #D53F8C;
        background-color: #F9F7FF;
        color: #333;
        font-size: 1rem;
    }

    .form-input:focus {
        border-color: #D53F8C;
        outline: none;
        box-shadow: 0 0 5px rgba(213, 63, 140, 0.5);
    }

    .submit-btn {
        background-color: #D53F8C;
        color: white;
        padding: 12px 24px;
        font-size: 1rem;
        border-radius: 8px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .submit-btn:hover {
        background-color: #F472B6;
    }

    .flash-success {
        background-color: #C6F6D5;
        color: #38A169;
        padding: 12px;
        border-radius: 8px;
    }
</style>
