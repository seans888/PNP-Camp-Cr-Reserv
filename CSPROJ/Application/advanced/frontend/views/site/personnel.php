<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Personnel';
?>
<div class="site-personnel">
    <center><h1><?= Html::encode($this->title) ?></h1></center>

       <!-- Tables of Contacts -->     
<style>
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
</style>
</head>
<body>

<table>
  <tr>
    <th data-scroll-reveal="enter from the bottom after 0.2s">Rank</th>
    <th data-scroll-reveal="enter from the bottom after 0.3s">Lastname</th>
    <th data-scroll-reveal="enter from the bottom after 0.4s">Firstname</th>
    <th data-scroll-reveal="enter from the bottom after 0.5s">Middle Name</th>
    <th data-scroll-reveal="enter from the bottom after 0.6s">Designation</th>
    <th data-scroll-reveal="enter from the bottom after 0.7s">Facilities</th>    

  </tr>
  <!-- Tennis Court -->
  <tr>
    <th data-scroll-reveal="enter from the bottom after 0.2s">SP01</th>
    <th data-scroll-reveal="enter from the bottom after 0.3s">Aquino</th>
    <th data-scroll-reveal="enter from the bottom after 0.4s">Adora</th>
    <th data-scroll-reveal="enter from the bottom after 0.5s">Digman</th>
    <th data-scroll-reveal="enter from the bottom after 0.6s">PNPCOIC, Tennis Court</th>
    <th data-scroll-reveal="enter from the bottom after 0.7s">
    <a href="index.php?r=site%2Ffacilities-tennis-court"
    class="btn btn-link" >Tennis Court</a>
    </th>
  </tr>

  <tr>
    <td data-scroll-reveal="enter from the bottom after 0.2s">SP01</td>
    <td data-scroll-reveal="enter from the bottom after 0.3s">Lacorte</td>
    <td data-scroll-reveal="enter from the bottom after 0.4s">Gierby</td>
    <td data-scroll-reveal="enter from the bottom after 0.5s">Halog</td>
    <td data-scroll-reveal="enter from the bottom after 0.6s">Duty Tennis Court</td>
    <td></td>
  </tr>
  <!-- Badminton Court-->
  <tr>
    <th data-scroll-reveal="enter from the bottom after 0.2s">P03</th>
    <th data-scroll-reveal="enter from the bottom after 0.3s">Doctor</th>
    <th data-scroll-reveal="enter from the bottom after 0.4s">Ian Rey</th>
    <th data-scroll-reveal="enter from the bottom after 0.5s">Bueno</th>
    <th data-scroll-reveal="enter from the bottom after 0.6s">PNPCOIC, Badminton Court</th>
    <th data-scroll-reveal="enter from the bottom after 0.7s">
    <a href="index.php?r=site%2Ffacilities-badminton-court"
    class="btn btn-link" >Badminton Court</a>
    </th>
  </tr>
  <tr>
    <td data-scroll-reveal="enter from the bottom after 0.2s">P01</td>
    <td data-scroll-reveal="enter from the bottom after 0.3s">Casas</td>
    <td data-scroll-reveal="enter from the bottom after 0.4s">Domingo Jr.</td>
    <td data-scroll-reveal="enter from the bottom after 0.5s">Bacaltos</td>
    <td data-scroll-reveal="enter from the bottom after 0.6s">Duty Badminton Court</td>
    <td></td>
  </tr>
  <!-- Basketball Court -->
  <tr>
    <th data-scroll-reveal="enter from the bottom after 0.2s">P03</th>
    <th data-scroll-reveal="enter from the bottom after 0.3s">Marquez</th>
    <th data-scroll-reveal="enter from the bottom after 0.4s">Artemio</th>
    <th data-scroll-reveal="enter from the bottom after 0.5s">Timpog</th>
    <th data-scroll-reveal="enter from the bottom after 0.6s">PNPCOIC, Duty Basketball Court</th>
    <th data-scroll-reveal="enter from the bottom after 0.7s">
    <a href="index.php?r=site%2Ffacilities-basketball-court"
    class="btn btn-link" >Basketball Court</a>
    </th>
  </tr>
  <tr>
    <td data-scroll-reveal="enter from the bottom after 0.2s">P02</td>
    <td data-scroll-reveal="enter from the bottom after 0.3s">Pelaez</td>
    <td data-scroll-reveal="enter from the bottom after 0.4s">Michael</td>
    <td data-scroll-reveal="enter from the bottom after 0.5s">Abrecinllo</td>
    <td data-scroll-reveal="enter from the bottom after 0.6s">Duty Basketball Court</td>
    <td></td>
  </tr>
  <!-- Fitness Center -->
  <tr>
    <th data-scroll-reveal="enter from the bottom after 0.2s">P03</th>
    <th data-scroll-reveal="enter from the bottom after 0.3s">Marquez</th>
    <th data-scroll-reveal="enter from the bottom after 0.4s">Leo Angelo</th>
    <th data-scroll-reveal="enter from the bottom after 0.5s">Dela Cruz</th>
    <th data-scroll-reveal="enter from the bottom after 0.6s">PNPCOIC, Fitness Center</th>
    <th data-scroll-reveal="enter from the bottom after 0.7s">
    <a href="index.php?r=site%2Ffacilities-fitness-center"
    class="btn btn-link" >Fitness Center</a>
    </th>
  </tr>
  <tr>
    <td data-scroll-reveal="enter from the bottom after 0.2s">P02</td>
    <td data-scroll-reveal="enter from the bottom after 0.3s">Pelaez</td>
    <td data-scroll-reveal="enter from the bottom after 0.4s">Michael</td>
    <td data-scroll-reveal="enter from the bottom after 0.5s">Abrecinllo</td>
    <td data-scroll-reveal="enter from the bottom after 0.6s">Duty Fitness Center</td>
    <td></td>
  </tr>
    <!-- Swimming Pool -->
  <tr>
    <th data-scroll-reveal="enter from the bottom after 0.2s">P02</th>
    <th data-scroll-reveal="enter from the bottom after 0.3s">Gascon</th>
    <th data-scroll-reveal="enter from the bottom after 0.4s">Janrel</th>
    <th data-scroll-reveal="enter from the bottom after 0.5s">Pinkian</th>
    <th data-scroll-reveal="enter from the bottom after 0.6s">PNCOIC, Swimming Pool </th>
    <th data-scroll-reveal="enter from the bottom after 0.7s">
    <a href="index.php?r=site%2Ffacilities-swimming-pool"
    class="btn btn-link" >Swimming Pool</a>
    </th>
  </tr>
  <tr>
    <td data-scroll-reveal="enter from the bottom after 0.2s">P02</td>
    <td data-scroll-reveal="enter from the bottom after 0.3s">Orpiano</td>
    <td data-scroll-reveal="enter from the bottom after 0.4s">Erwin Daniel</td>
    <td data-scroll-reveal="enter from the bottom after 0.5s">Budol</td>
    <td data-scroll-reveal="enter from the bottom after 0.6s">Duty Swimming Pool</td>
    <td></td>
  </tr>
  <tr>
    <td data-scroll-reveal="enter from the bottom after 0.2s">NUP</td>
    <td data-scroll-reveal="enter from the bottom after 0.3s">Ortega</td>
    <td data-scroll-reveal="enter from the bottom after 0.4s">Meladin</td>
    <td data-scroll-reveal="enter from the bottom after 0.5s">Dawang</td>
    <td data-scroll-reveal="enter from the bottom after 0.6s">Life Guard Swimming Pool </td>
    <td></td>
  </tr>
  <tr>
    <td data-scroll-reveal="enter from the bottom after 0.2s">NUP</td>
    <td data-scroll-reveal="enter from the bottom after 0.3s">De Guzman</td>
    <td data-scroll-reveal="enter from the bottom after 0.4s">Luis</td>
    <td data-scroll-reveal="enter from the bottom after 0.5s">Francisco</td>
    <td data-scroll-reveal="enter from the bottom after 0.6s">Life Guard Swimming Pool</td>
    <td></td>
  </tr>
  <!-- Boxing Area -->
  <tr>
    <th data-scroll-reveal="enter from the bottom after 0.2s">P01</th>
    <th data-scroll-reveal="enter from the bottom after 0.3s">Maglangit</th>
    <th data-scroll-reveal="enter from the bottom after 0.4s">Damascino</th>
    <th data-scroll-reveal="enter from the bottom after 0.5s">Gailanan</th>
    <th data-scroll-reveal="enter from the bottom after 0.6s">Duty PNCOIC, Boxing Area</th>
    <th data-scroll-reveal="enter from the bottom after 0.7s">
    <a href="index.php?r=site%2Ffacilities-boxing-area"
    class="btn btn-link" >Boxing Area</a>
    </th>
  </tr>
    <!-- Transformation Oval -->
  <tr>
    <th data-scroll-reveal="enter from the bottom after 0.4s">P03</th>
    <th data-scroll-reveal="enter from the bottom after 0.4s">Torio</th>
    <th data-scroll-reveal="enter from the bottom after 0.4s">Alvin</th>
    <th data-scroll-reveal="enter from the bottom after 0.4s">Beltran</th>
    <th data-scroll-reveal="enter from the bottom after 0.4s">PNCOIC, Grandstand/Trans-Oval</th>
    <th data-scroll-reveal="enter from the bottom after 0.4s">
    <a href="index.php?r=site%2Ffacilities-grandstand"
    class="btn btn-link" >Grandstand</a>
    </th>
  </tr>
</table>

</body>
</div>
