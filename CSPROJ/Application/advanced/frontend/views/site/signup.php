<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Signup';
?>

<style>
.btn-primary {
    color: #fff;
    background-color: rgba(20, 81, 125, 1);
    border-color: #2e6da4;
    width: 398px;
    height: 30px;
}
.form-group {
    margin-bottom: 10px;
    width: 400px;
}
.panel-default {
    border-color: #ddd;
    width: 700px;
}
.row {
    margin-right: 50px;
    margin-left: -150px;
}
.has-error .checkbox, .has-error .checkbox-inline, .has-error .control-label, .has-error .help-block, .has-error .radio, .has-error .radio-inline, .has-error.checkbox label, .has-error.checkbox-inline label, .has-error.radio label, .has-error.radio-inline label {
    color: #a94442;
    margin-top: 5px;
}
</style>

<body style='background: url(http://isc.pulis.net/img/bg-employee.png);'>
     <div class="site-signup">
        <div class="col-sm-12 col-md-2 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <strong>Add Your Information</strong>
                </div>
                <div class="table-responsive">
                    <div class="panel-body">           
                        <fieldset>
                            <div class="row">
                              <div class="col-sm-10 col-md-10  col-md-offset-1 ">
                                <div class="col-sm-12 col-md-4 col-md-offset-4">
                                    <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

                                        <b><p>Username</p></b>
                                        <?= $form->field($model, 'username')->textInput(['autofocus' => true, 'placeholder' => 'jdcruz'])->hint('')->label(false) ?> <BR>

                                        <b><p>Email Address</p></b>
                                        <?= $form->field($model, 'email')->textInput(['placeholder' => 'jdcruz@email.com'])->hint('')->label(false) ?><BR>
                                        
                                        <b><p>Password</p></b>
                                        <?= $form->field($model, 'password')->passwordInput(['placeholder' => '**********'])->hint('')->label(false) ?><BR>
                                        
                                        <!--====================-->
                                        <b><p>Firstname</p></b>
                                        <?= $form->field($model, 'firstname')->textInput(['placeholder' => 'Juan'])->hint('')->label(false) ?><br>

                                        <b><p>Lastname</p></b>
                                        <?= $form->field($model, 'lastname')->textInput(['placeholder' => 'Dela Cruz Jr.'])->hint('')->label(false) ?><br>

                                        <b><p>Middlename</p></b>
                                        <?= $form->field($model, 'middlename')->textInput(['placeholder' => 'put "-" if blank'])->hint('')->label(false) ?><br>

                                        <b><p>Birthdate</p></b>
                                        <?= $form->field($model, 'birthdate')->textInput(['placeholder' => 'YYYY-MM-DD'])->hint('')->label(false) ?><br>

                                        <b><p>Contact Number</p></b>
                                        <?= $form->field($model, 'contact_number')->textInput(['placeholder' => '09*********'])->hint('')->label(false) ?><br>

                                        <b><p>Street Address</p></b>
                                        <?= $form->field($model, 'street_address')->textInput(['maxlength' => true, 'placeholder' => '1234 Main Street'])->hint('')->label(false) ?><br>

                                        <b><p>State Address</p></b>
                                        <?= $form->field($model, 'state_address')->textInput(['maxlength' => true, 'placeholder' => 'Province / Region'])->hint('')->label(false) ?><br>

                                        <b><p>Zipcode Address</p></b>
                                        <?= $form->field($model, 'zipcode_address')->textInput(['maxlength' => true, 'placeholder' => 'Zip / Postal Code'])->hint('')->label(false) ?><br>

                                        <b><p>City Address</p></b>
                                        <?= $form->field($model, 'city_address')->textInput(['maxlength' => true, 'placeholder' => 'Makati City'])->hint('')->label(false) ?><br>

                                        <b><p>Gender</p></b>
                                        <?= $form->field($model, 'gender')->textInput(['maxlength' => true, 'placeholder' => 'Gender'])->hint('')->label(false) ?><br>

                                        <?= $form->field($model, 'position')->dropDownList([
                                            'Civilian' => 'Civilian',
                                            'SP01' => 'SP01',
                                            'P01' => 'P01'],
                                        ['prompt' => 'Choose One']) ?><br>
                                        
                                            <div class="form-group">
                                                <div>
                                                    <label for="EmpPicturePath">Select Profile Picture:</label>
                                                </div>
                                                <div>
                                                    <input name="EmpPicturePath" type="file" id="EmpPicturePath">
                                                </div> 
                                            </div>

                                    <div class="form-group">
                                        <?= Html::submitButton('Signup', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                                    </div>
                                        <?php ActiveForm::end(); ?>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body> 


