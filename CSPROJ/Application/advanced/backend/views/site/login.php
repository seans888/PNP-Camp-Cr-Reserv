<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
?>

<style>
a {
    color: rgba(20, 81, 125, 1);
    text-decoration: none;
}
.btn-primary {
    color: #fff;
    background-color: rgba(20, 81, 125, 1);
    border-color: #2e6da4;
    width: 557px;
}
.login-box-body, .register-box-body {
    background: #fff;
    padding: 70px;
    border-top: 0;
    color: #666;
    padding-bottom: 10px;
    padding-top: 10px;
}
.login-box, .register-box {
    width: 700px;
    margin: 7% auto;
}
.btn{
    padding: 7px 12px;
    padding-top: 7px;
    padding-right: 12px;
    padding-bottom: 7px;
    padding-left: 12px;
margin-bottom: 0;
}
body {
    font-family: Segoe UI, sans-serif;
    background: url(../img/bg-employee.png) no-repeat center center fixed;
        background-color: transparent;
        background-image: url("../img/bg-employee.png");
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-clip: border-box;
        background-origin: padding-box;
        background-position-x: center;
        background-position-y: center;
        background-size: auto auto;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
}
</style>

<body style='background: url(http://isc.pulis.net/img/bg-employee.png);'>
    <div class="site-login">
        <div class="login-box">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <strong>PNP Camp Crame Sports Center Administrator Login</strong>
                </div>
                <div class="login-box-body">
                    <div class="center-block">
                        <center>
                            <img src="<?= Yii::$app->request->baseUrl ?>/images/login_header.jpg" width="450px" height="140px">
                        </center>
                    </div>
                    <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
                    <?= $form->field($model, 'username', ['options'=>[
                        'tag' => 'div',
                        'class' =>'form-group field-loginform-username has-feedback required'
                    ],
                        'template'=>'{input}<span class="glyphicon glyphicon-user form-control-feedback"></span>
                                                 {error}{hint}'
                    ])->textInput(['placeholder'=>'Username'])
                    ?><br>

                    <?= $form->field($model, 'password', ['options'=>[
                        'tag' => 'div',
                        'class' =>'form-group field-loginform-password has-feedback required'
                    ],
                        'template'=>'{input}<span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                                 {error}{hint}'
                    ])->passwordInput(['placeholder'=>'Password']) ?>

                    <?= $form->field($model, 'rememberMe')->checkbox() ?><br>
                    <div class="form-group">
                        <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button'])?>
                    </div>
                    <!-- <center>
                        <div style="color:#999; margin:0em 0; font-size: 20px;">
                            New here? <?= Html::a('Sign up today', ['site/signup']) ?>.
                        </div>
                    </center> -->
                    <center>
                        <div style="color:#999;margin:1em 0">
                            <?= Html::a('Forgot Password?', ['site/request-password-reset']) ?>.
                        </div>
                        <div>
                    <h4>Don't have an account? <?= Html::a('Sign Up', ['site/signup']) ?>.</h4>
                </div>
                    </center>
                    <?php ActiveForm::end(); ?>
                </div>
                <div class="panel-footer ">
                    Please sign in with the correct login credentials.
                </div>
            </div>
        </div>
    </div>
</body>



