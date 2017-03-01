<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Profile';
//$this->params['breadcrumbs'][] = $this->title;
?>
        <center>
            <h1><?= Html::encode($this->title) ?></h1>
        </center>
<style>
b, strong {
    font-weight: 700;
    color: #000000;
    margin-left: 25px;
}
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
.col-xs-7 {
    width: 100%;
    margin-left: 20px;
    margin-right: 200px;
}
.col-md-6 {
    width: 70%;
    margin-left: 200px;
}
</style>
<div class="site-profile">
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="well well-sm">
                <div class="row">
                    <div data-scroll-reveal="enter from the bottom after 0.2s" >
                        <div class="col-xs-7" >
                            <div class="col-sm-6 col-md-4">
                                <img src="<?= Yii::$app->request->baseUrl ?>/images/avatar5.png" style="width:280px; height: 300px" alt="" class="img-rounded img-responsive">     
                            </div>
                            <h4>
                                <i class="glyphicon glyphicon-bookmark"></i>
                                <b>ID: <?php echo Yii::$app->user->identity->id ?></b>
                            </h4>
                            <h4>
                                <i class="glyphicon glyphicon-star-empty"></i>
                                <b>Rank: <?php echo Yii::$app->user->identity->position ?></b>
                            </h4>
                            <h4>
                                <i class="glyphicon glyphicon-user"></i>
                                <b>Username: <?php echo Yii::$app->user->identity->username ?></b>
                            </h4>
                            <h4>
                                <i class="glyphicon glyphicon-envelope"></i>
                                <b>Email Address: <?php echo Yii::$app->user->identity->email ?></b>
                            </h4>
                            <h4>
                                <i class="glyphicon glyphicon-user"></i>
                                <b>Name: <?php echo Yii::$app->user->identity->lastname ?>,
                                <?php echo Yii::$app->user->identity->firstname ?>
                                <?php echo Yii::$app->user->identity->middlename ?>
                                </b>
                            </h4>
                            <h4>
                                <i class="glyphicon glyphicon-home"></i>
                                <b>Address: <?php echo Yii::$app->user->identity->home_address ?></b>
                            </h4>
                            <h4>
                                <i class="glyphicon glyphicon-calendar"></i>
                                <b>Birthdate: <?php echo Yii::$app->user->identity->birthdate ?></b>
                            </h4>
                            <h4>
                                <i class="glyphicon glyphicon-phone-alt"></i>
                                <b>Contact Number: <?php echo Yii::$app->user->identity->contact_number ?></b>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- <div class="col-lg-4 col-md-4 col-sm-4 col-lg-offset-1 col-md-offset-1 col-sm-offset-1">
                   <div class="panel-group" id="accordion">
                        <div class="panel panel-default" data-scroll-reveal="enter from the bottom after 0.5s">
                            <div class="panel-heading" >
                                <h4 class="panel-title">
                                    <a href="http://localhost/advanced/frontend/web/index.php?r=schedule">
                                  <strong>My Schedule</strong>
                                    </a>
                                </h4>
                            </div>
                        </div>
                        <div class="panel panel-default" data-scroll-reveal="enter from the bottom after 0.7s">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a href="http://localhost/advanced/frontend/web/index.php?r=grades">
                                      <strong>My Grades </strong> 
                                    </a>
                                </h4>
                            </div>
                        </div>
                        <div class="panel panel-default" data-scroll-reveal="enter from the bottom after 0.9s">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a href="http://localhost/advanced/frontend/web/index.php?r=attendance">
                                        <strong>My Attendance</strong>
                                    </a>
                                </h4>
                            </div>
                        </div>
                    </div> -->


<!--<div class="col-xs-5" align="right">
<table border="1"  width="300px">
    <td bgcolor="#eee"><h4 align="center" >Activities</h4><br>
    <h4 align="center"><a href="http://localhost/advanced/frontend/web/index.php?r=schedule">My Schedule</h4></a>
    <hr class="hr1" width="200px" "#2471A3">
    <h4 align="center"><a href="http://localhost/advanced/frontend/web/index.php?r=grades">My Grades</h4></a>
    <hr width="200px">
    <h4 align="center"><a href="http://localhost/advanced/frontend/web/index.php?r=attendance">My Attendance</h4></a>
    </td>
    </table>
    </div>-->

