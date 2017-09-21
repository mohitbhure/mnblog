<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
$this->registerCssFile("@web/themes/admin/css/login.css", [
    'depends' => [\yii\bootstrap\BootstrapAsset::className()]
]);
?>
	<div class="head">
			<div class="container">
				<div class="row  pad-top">
					<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
						<div class="panel panel-default">
							<div class="panel-heading">
								<strong class=" login "> Login </strong>
							</div>
							<div class="col-md-12 desn"></div>
							<div class="section-title-bottom">
                        	  <span class="section-title-bottom-inner "></span>
                            </div>
							<div class="panel-body">
								<?php $form = ActiveForm::begin([
									'id' => 'login-form']); 
								?><br/>
								     <div class="form-group input-group">
											<span class=" "><i class="fa fa-lock"  ></i></span>
											<?= $form->field($model, 'username')->textInput(['class' => 'form-control','placeholder' => ' Enter User Name'])->label(false) ?>
									    </div>
										<div class="form-group input-group">
											<span class=""><i class="fa fa-lock"></i></span>
											<?= $form->field($model, 'password')->passwordInput(['class'=>'form-control','placeholder' => 'Enter Password'])->label(false) ?>
			                            </div>
										<div class="form-group">
											<label class="checkbox-inline">
											<?= $form->field($model, 'rememberMe')->checkbox()?>
										    </label>
											<span class="pull-right"> <a href="#" >Forget password ? </a> </span>
										</div>
										 <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?><hr />
										<div>
											Not register ? <a href="#" >click here </a>
			                            </div>
						         <?php ActiveForm::end(); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		