<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Contact';
?>
<div class="site-contact">
    <center><h1><?= Html::encode($this->title) ?></h1></center>
       
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
</style>

<!-- Contacts -->
    <center><p>
        If you have business inquiries or other questions, please fill out the following form to contact us. Thank you.
    </p></center>
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

               <center><div class="form-group">
                    <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                </div></center>

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
                     <a href="#"> <img src="<?= Yii::$app->request->baseUrl ?>/images/google-plus.png" alt="" /></a>
                     <a href="http://www.twitter.com/lsckatipunan" target="_blank"> <img src="<?= Yii::$app->request->baseUrl ?>/images/twitter.png" alt="" /></a>
            </center>
        </div>
    </div>

</div>
</div>
