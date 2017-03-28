<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Contact';
?>

<style>
.col-lg-4 {
    width: 58%;
    margin-left: 2px;
}
.col-md-8 {
    width: 85%;
}
.col-md-offset-5 {
    margin-left: 15%;
}
    .btn-primary {
    color: #fff;
    background-color: #337ab7;
    border-color: #2e6da4;
    width: 312px;
}
.btn {
    display: inline-block;
    padding: 5px 20px;
    margin-bottom: 0;
    font-size: 14px;
    font-weight: 400;
    line-height: 1.42857143;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    -ms-touch-action: manipulation;
    touch-action: manipulation;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    background-image: none;
    border: 1px solid transparent;
    border-radius: 4px;
}
.help-block {
    display: block;
    margin-top: 1px;
    margin-bottom: 10px;
    color: #737373;
}
.tag-line {
    background: rgba(20, 81, 125, 1);
    color: #000;
    width: 1000px;
    margin-left: -15px;
}
.tag-line h2 {
    font-size: 20px;
    font-weight: 900;
    padding: 0px;
    color: #fff;
}
body {
    background: url(images/background.jpg) no-repeat center center fixed;
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
.container {
    width: 1000px;
}
img {
    vertical-align: middle;
    margin-left: -15px;
}
.wrap > .container {
    padding: 65px 15px 20px;
    background-color: floralwhite;
}
.row {
    margin-right: -1px;
    margin-left: -30px;
}
.col-lg-offset-2 {
    margin-left: 6.66666667%;
    margin-top: 30px;
}  
</style>
<body style='background: url(images/background5.jpg) no-repeat; background-attachment: fixed;'>
<center>
    <img src="images/pnp2.jpg" style="width: 1000px; height: 450px;">
      <div  class="tag-line" >
        <div class="container">
          <div class="row  text-center" >
            <div class="col-lg-12  col-md-12 col-sm-12">   
              <h2 data-scroll-reveal="enter from the bottom after 0.1s" ></i>CONTACT</h2>
            </div>
          </div>
        </div>   
      </div>
</center><br>
<div class="site-contact">
    <center>
        <p>If you have business inquiries or other questions, please fill out the following form to contact us. Thank you.</p>
    </center>
    <div class="row">
        <div class="col-sm-12 col-md-8 col-md-offset-5">
            <div class="col-lg-5" data-scroll-reveal="enter from the bottom after 0.2s">
                <center><p><b>Contact Us</b></p></center>
                    <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>
                    <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>
                    <?= $form->field($model, 'email') ?>
                    <?= $form->field($model, 'subject') ?>
                    <?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>
                    <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                        'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                    ]) ?>
                <center>
                    <div class="form-group">
                    <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                    </div>
                </center>

                <?php ActiveForm::end(); ?>
            </div>
            <div class="col-lg-4">
                <center data-scroll-reveal="enter from the bottom after 0.5s"><p><b>Our Location</b></p>
                    <img src="<?= Yii::$app->request->baseUrl ?>/images/pnplocation.png" width="300" height="300">
                    <b><p>PNP CAMP CRAME SPORTS CENTER</p></b>
                    <p>Cubao, Quezon City</p><br>
                </center>
                <center data-scroll-reveal="enter from the bottom after 0.7s"><p><b>Social Networks</b></p>
                    <a href="https://www.facebook.com/pages/Pnp-Sports-Center-Camp-Crame/499514466867160?fref=ts" target="_blank">  <img src="<?= Yii::$app->request->baseUrl ?>/images/facebook.png" alt="" /> </a>
<!--                     <a href="https://mailtrap.io/inboxes/189814/settings"> <img src="<?= Yii::$app->request->baseUrl ?>/images/google-plus.png" alt="" /></a>
                    <a href="http://www.twitter.com/lsckatipunan" target="_blank"> <img src="<?= Yii::$app->request->baseUrl ?>/images/twitter.png" alt="" /></a> -->
                </center>
            </div>
        </div>
    </div>
</div>
