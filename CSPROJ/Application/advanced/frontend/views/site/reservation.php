<?php
  
/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Reservation';
?>
<!DOCTYPE html>
<html>
<head>
	<title> Reserve </title>

	<!-- <link href="calendar.css" type="text/css" rel="stylesheet" /> -->

	<style type="text/css">
		/*******************************Calendar Top Navigation*********************************/
		div#calendar{
		  margin:0px auto;
		  padding:0px;
		  width: 602px;
		  font-family:Helvetica, "Times New Roman", Times, serif;
		}
		 
		div#calendar div.box{
		    position:relative;
		    top:0px;
		    left:0px;
		    width:100%;
		    height:40px;
		    background-color:   #787878 ;      
		}
		 
		div#calendar div.header{
		    line-height:40px;  
		    vertical-align:middle;
		    position:absolute;
		    left:11px;
		    top:0px;
		    width:582px;
		    height:40px;   
		    text-align:center;
		}
		 
		div#calendar div.header a.prev,div#calendar div.header a.next{ 
		    position:absolute;
		    top:0px;   
		    height: 17px;
		    display:block;
		    cursor:pointer;
		    text-decoration:none;
		    color:#FFF;
		}
		 
		div#calendar div.header span.title{
		    color:#FFF;
		    font-size:18px;
		}
		 
		 
		div#calendar div.header a.prev{
		    left:0px;
		}
		 
		div#calendar div.header a.next{
		    right:0px;
		}
		 
		 
		/*******************************Calendar Content Cells*********************************/
		div#calendar div.box-content{
		    border:1px solid #787878 ;
		    border-top:none;
		}
		 
		div#calendar ul.label{
		    float:left;
		    margin: 0px;
		    padding: 0px;
		    margin-top:5px;
		    margin-left: 5px;
		}
		 
		div#calendar ul.label li{
		    margin:0px;
		    padding:0px;
		    margin-right:5px;  
		    float:left;
		    list-style-type:none;
		    width:80px;
		    height:40px;
		    line-height:40px;
		    vertical-align:middle;
		    text-align:center;
		    color:#000;
		    font-size: 15px;
		    background-color: transparent;
		}
		 
		 
		div#calendar ul.dates{
		    float:left;
		    margin: 0px;
		    padding: 0px;
		    margin-left: 5px;
		    margin-bottom: 5px;
		}
		 
		/** overall width = width+padding-right**/
		div#calendar ul.dates li{
		    margin:0px;
		    padding:0px;
		    margin-right:5px;
		    margin-top: 5px;
		    line-height:80px;
		    vertical-align:middle;
		    float:left;
		    list-style-type:none;
		    width:80px;
		    height:80px;
		    font-size:25px;
		    background-color: #DDD;
		    color:#000;
		    text-align:center; 
		}
		 
		:focus{
		    outline:none;
		}
		 
		div.clear{
		    clear:both;
		} 
		.col-lg-4 {
    width: 58%;
    margin-left: 2px;
}
.col-md-8 {
    width: 85%;
}
.col-md-offset-5 {
    margin-left: 7%;
}
.col-lg-5 {
    width: 41.66666667%;
    margin-left: -90px;
}
    .btn-primary {
    color: #fff;
    background-color: #337ab7;
    border-color: #2e6da4;
    width: 312px;
}
.tag-line {
    background: rgba(20, 81, 125, 1);
    color: #000;
    width: 1000px;
    margin-left: -15px;
    margin-bottom: 30px
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
hr {
    margin-top: 10px;
    margin-bottom: 20px;
    border: 0;
    border-top: 1px solid #eee;
    width: 100%;
}
</style>
<body style='background: url(images/background6.jpg) no-repeat;'>
<center>
    <img src="images/pnp2.jpg" style="width: 1000px; height: 450px;">
      <div  class="tag-line" >
        <div class="container">
          <div class="row  text-center" >
            <div class="col-lg-12  col-md-12 col-sm-12">   
              <h2 data-scroll-reveal="enter from the bottom after 0.1s" ></i>RESERVATION</h2>
            </div>
          </div>
        </div>   
      </div>
</center>


</head>
	<body>
		<div class="col-sm-12 col-md-8 col-md-offset-5">
	        <div class="col-lg-5" data-scroll-reveal="enter from the bottom after 0.2s">
	            <center><h4><b>Reservation Procedure</b></h4></center><br>
	            <p>
	            	<p data-scroll-reveal="enter from the bottom after 0.2s"><b>STEP 1</p></b>
	            	<p data-scroll-reveal="enter from the bottom after 0.2s"> Choose facility to reserve</p>
	            	<p data-scroll-reveal="enter from the bottom after 0.3s"><b>STEP 2</p></b>
	            	<p data-scroll-reveal="enter from the bottom after 0.3s"> Choose reservation date</p>
	            	<p data-scroll-reveal="enter from the bottom after 0.4s"><b>STEP 3</p></b>
	            	<p data-scroll-reveal="enter from the bottom after 0.4s"> Fill up the Reservation Form</p>
	            	<p data-scroll-reveal="enter from the bottom after 0.5s"><b>STEP 4</p></b>
	            	<p data-scroll-reveal="enter from the bottom after 0.5s"> Submit the Reservation Form</p>
	            	<p data-scroll-reveal="enter from the bottom after 0.6s"><b>STEP 5</p></b>
	            	<p data-scroll-reveal="enter from the bottom after 0.6s"> Wait for the reservation approval within three (3) days </p>
	            	<p data-scroll-reveal="enter from the bottom after 0.7s"><b>Proceed to PNP Camp Crame Sports Center, if qualified.</b></p>
	            </p>

			</div>


	        <div class="col-lg-4" data-scroll-reveal="enter from the bottom after 0.4s">
	            <center><h4><b>Choose Date</b></h4></center><br>
				<?php
					include 'calendar.php';
					 
					$calendar = new Calendar();
					 
					echo $calendar->show();
				?>
			</div>
		</div>
	</body>
</html>