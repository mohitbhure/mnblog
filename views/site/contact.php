<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Contact';

$this->params['breadcrumbs'][] = $this->title;
$this->registerCssFile("@web/themes/admin/css/contact.css", [
    'depends' => [\yii\bootstrap\BootstrapAsset::className()]
]);
?>

<div class="site-contact">

	<?php if (Yii::$app->session->hasFlash('contactFormSubmitted')):?>
	

	<div class="alert alert-success">
		Thank you for contacting us. We will respond to you as soon as possible.
	</div>

	<p>
	Note that if you turn on the Yii debugger, you should be able
	to view the mail message on the mail panel of the debugger.
	<?php if (Yii::$app->mailer->useFileTransport):?>
	
	Because the application is in development mode, the email is not sent but saved as
	a file under <code><?= Yii::getAlias(Yii::$app->mailer->fileTransportPath) ?></code>.
	Please configure the <code>useFileTransport</code> property of the <code>mail</code>
	application component to be false to enable email sending.
	<?php endif; ?>
	</p>
	
	<?php else: ?>
	<div class="row head">
		<div class="col-md-10">
			<div class="well well-sm">
				<?php $form = ActiveForm::begin([
                         'id' => 'contact-form',
                         'fieldConfig' => [
                         'labelOptions' => ['class' => 'form-horizontal'],
                        ],]);	?>
					<fieldset>
					<legend class="text-center header">Contact us</legend>
					<div class="section-title-bottom">
					  <span class="section-title-bottom-inner "></span>
					</div>
					<div class="form-group">
					<div class="col-md-10 col-md-offset-1">
						<?= $form->field($model, 'name')->textInput(['class' => 'form-control','placeholder' => 'Enter User Name'])->label(false)?>	
					</div>
					</div>
					<div class="form-group">
					<div class="col-md-10 col-md-offset-1">
						<?= $form->field($model, 'email')->textInput(['class' => 'form-control','placeholder' => 'Enter Your Email'])->label(false)
						?>
					</div>
					</div>
					<div class="form-group">
					<div class="col-md-10 col-md-offset-1">
						<?= $form->field($model, 'subject')->textInput(['class' => 'form-control','placeholder' => 'Enter Subject'])->label(false)?>
					</div>
					</div>
					<div class="form-group">
					<div class="col-md-10 col-md-offset-1">
					  <?= $form->field($model, 'body')->textarea(['rows' => 6,'class' => 'form-control'])->label(false)?>
					</div>
					</div>
					<div class="form-group">
						<?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
		                  'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-8">{input}</div></div>',
		                ])?>					
		            </div>
					<div class="form-group">
					<div class="col-md-12 text-center">
					  <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button'])?>
					</div>
					</div>
					</fieldset>
				<?php ActiveForm::end(); ?>
				</div>
			</div>
		</div>
		<?php endif; ?>
	</div>
