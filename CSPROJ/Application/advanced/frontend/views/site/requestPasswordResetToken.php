<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\PasswordResetRequestForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Request password reset';
?>

<style>
    .btn-primary {
    color: #fff;
    background-color: #337ab7;
    border-color: #2e6da4;
    width: 482px;
    margin-top: 15px;
    height: 30px;
}
.col-lg-5 {
    width: 41.66666667%;
    margin-left: 360px;
    margin-top: 20px;
}
.help-block {
    display: block;
    margin-top: 0px;
    margin-bottom: 10px;
    color: #737373;
}

</style>

<div class="site-request-password-reset">
    <center>
        <h1><?= Html::encode($this->title) ?></h1>
    </center>

    <center>
        <p>Please fill out your email. A link to reset password will be sent there.</p>
    </center>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'request-password-reset-form']); ?>

                <?= $form->field($model, 'email')->textInput(['autofocus' => true]) ?>

                <div class="form-group">
                    <?= Html::submitButton('Send', ['class' => 'btn btn-primary']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
