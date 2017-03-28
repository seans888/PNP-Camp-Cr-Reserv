<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ResetPasswordForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Reset password';
?>

<style>
.help-block {
    display: block;
    margin-top: 0px;
    margin-bottom: 10px;
    color: #737373;
}
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
</style>

<div class="site-reset-password">
    <center>
        <h1><?= Html::encode($this->title) ?></h1>
        <p>Please choose your new password:</p>
    </center>
    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'reset-password-form']); ?>

                <?= $form->field($model, 'password')->passwordInput(['autofocus' => true]) ?>

                <div class="form-group">
                    <?= Html::submitButton('Save', ['class' => 'btn btn-primary']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
