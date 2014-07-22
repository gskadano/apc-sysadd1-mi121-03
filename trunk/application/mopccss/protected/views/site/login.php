<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>

<center><h1>Login Page</h1></center>

<!--<p>Please fill out the following form with your login credentials:</p>-->
<style>

		html, body {
	margin: 0;
	padding: 0;
	background-attachment: fixed;
	background-position: 50% 50%;
	background-size: cover;
}
a {
	text-decoration: underline;
}
a:hover {
	text-decoration: none;
}

.bg-cyan {
	background: radial-gradient(orange, black);
}

.body {
	max-width: 600px;
	margin: 0 auto;
	padding: 40px;
}
.body-s {
	max-width: 400px;
}
@media screen and (max-width: 600px) {
	.body {
		padding: 20px;
	}
}
		

/**/
/* defaults */
/**/
.sky-form {
	margin: 0;
	outline: none;
	box-shadow: 0 0 20px rgba(0,0,0,.3);
	font: 13px/1.55 'Open Sans', Helvetica, Arial, sans-serif;
	color: #666;
}
.sky-form * {
	margin: 0;
	padding: 0;
}
.sky-form header {
	display: block;
	padding: 20px 30px;	
	border-bottom: 1px solid rgba(0,0,0,.1);
	background: rgba(248,248,248,.9);
	font-size: 25px;
	font-weight: 300;
	color: #232323;
}
.sky-form fieldset {
	display: block;	
	border: none;
	background: rgba(255,255,255,.9);
}
.sky-form fieldset + fieldset {
	border-top: 1px solid rgba(0,0,0,.1);
}
.sky-form section {
	margin-bottom: 20px;
}
.sky-form footer {
	display: block;
	padding: 15px 30px 25px;
	border-top: 1px solid rgba(0,0,0,.1);
	background: rgba(248,248,248,.9);
}
.sky-form footer:after {
	content: '';
	display: table;
	clear: both;
}
.sky-form a {
	color: #2da5da;
}
.sky-form .label {
	display: block;
	margin-bottom: 6px;
	line-height: 19px;
}
.sky-form .label.col {
	margin: 0;
	padding-top: 10px;
}
.sky-form .note {
	margin-top: 6px;
	padding: 0 1px;
	font-size: 11px;
	line-height: 15px;
	color: #999;
}
.sky-form .input,
.sky-form .select,
.sky-form .textarea,
.sky-form .radio,
.sky-form .checkbox,
.sky-form .toggle,
.sky-form .button {
	position: relative;
	display: block;
}
.sky-form .input input,
.sky-form .select select,
.sky-form .textarea textarea {
	display: block;
	box-sizing: border-box;
	-moz-box-sizing: border-box;
	width: 100%;
	height: 39px;
	padding: 8px 10px;
	outline: none;
	border-width: 2px;
	border-style: solid;
	border-radius: 0;
	background: #fff;
	font: 15px/19px 'Open Sans', Helvetica, Arial, sans-serif;
	color: #404040;
	appearance: normal;
	-moz-appearance: none;
	-webkit-appearance: none;
}


/**/
/* radios and checkboxes */
/**/
.sky-form .radio,
.sky-form .checkbox {
	margin-bottom: 4px;
	padding-left: 27px;
	font-size: 15px;
	line-height: 27px;
	color: #404040;
	cursor: pointer;
}
.sky-form .radio:last-child,
.sky-form .checkbox:last-child {
	margin-bottom: 0;
}
.sky-form .radio input,
.sky-form .checkbox input {
	position: absolute;
	left: -9999px;
}
.sky-form .radio i,
.sky-form .checkbox i {
	position: absolute;
	top: 5px;
	left: 0;
	display: block;
	width: 13px;
	height: 13px;
	outline: none;
	border-width: 2px;
	border-style: solid;
	background: #fff;
}
.sky-form .radio i {
	border-radius: 50%;
}
.sky-form .radio input + i:after,
.sky-form .checkbox input + i:after {
	position: absolute;
	opacity: 0;
	transition: opacity 0.1s;
	-o-transition: opacity 0.1s;
	-ms-transition: opacity 0.1s;
	-moz-transition: opacity 0.1s;
	-webkit-transition: opacity 0.1s;
}
.sky-form .radio input + i:after {
	content: '';
	top: 4px;
	left: 4px;
	width: 5px;
	height: 5px;
	border-radius: 50%;
}
.sky-form .checkbox input + i:after {
	content: '\f00c';
	top: -1px;
	left: -1px;
	width: 15px;
	height: 15px;
	font: normal 12px/16px FontAwesome;
	text-align: center;
}
.sky-form .radio input:checked + i:after,
.sky-form .checkbox input:checked + i:after {
	opacity: 1;
}
.sky-form .inline-group {
	margin: 0 -30px -4px 0;
}
.sky-form .inline-group:after {
	content: '';
	display: table;
	clear: both;
}
.sky-form .inline-group .radio,
.sky-form .inline-group .checkbox {
	float: left;
	margin-right: 30px;
}
.sky-form .inline-group .radio:last-child,
.sky-form .inline-group .checkbox:last-child {
	margin-bottom: 4px;
}

</style>
<!--<div class="form">-->
<div class="body body-s">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<div class="sky-form">
		<div class="sky-form fieldset" style="padding:20px 20px 20px 20px; color:blue;">		
			<p class="note">Fields with <span class="required">*</span> are required.</p>
			<div class="section">
				<div class="form">
					<?php echo $form->labelEx($model,'username'); ?>
					<?php echo $form->textField($model,'username'); ?>
					<?php echo $form->error($model,'username'); ?>
				</div>
			</div>
					
			<div class="section">
				<div class="form">
					<?php echo $form->labelEx($model,'password'); ?>
					<?php echo $form->passwordField($model,'password'); ?>
					<?php echo $form->error($model,'password'); ?>
					<p class="hint">
						Hint: You may login with <kbd>demo</kbd>/<kbd>demo</kbd> or <kbd>admin</kbd>/<kbd>admin</kbd>.
					</p>
				</div>
			</div>	
			
			<div class="section">
				<div class="form">
					<div class="row rememberMe">
					<?php echo $form->checkBox($model,'rememberMe'); ?>
					<?php echo $form->label($model,'rememberMe'); ?>
					<?php echo $form->error($model,'rememberMe'); ?>
					</div>
				</div>
			</div>	
			
			<div class="section">
				<div class="form">
					<div class="row buttons">
						<?php echo CHtml::submitButton('Login'); ?>
					</div>
				</div>
			</div>	
		</div>
	</div>
<?php $this->endWidget(); ?>
</div><!-- form -->
