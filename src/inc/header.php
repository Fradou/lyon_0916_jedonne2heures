<!DOCTYPE html>
<html>

<head>
  <!-- accueil / carou / vid : comment gérer via boot ? superposition z axis ? -->

  <meta http-equiv="Content-type" content="text/html" charset="utf-8" />

  <?php
    include_once 'links.php';
  ?>
  <title><?php echo $pageTitle; ?> </title>

</head>


<body>
  <header>
  <nav class="navbar navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="../public/index.php"><img src="../public/img/logo-jd2h-allblack.png" alt="jd2h logo"></a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li><a href="../src/jedonne.php">Je donne</a></li>
          <li><a href="../src/jepropose.php">Je propose</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right nav-social">
          <li><a href="../src/aboutus.php">Contactez-nous</a></li>
          <li><a href="#"><img src="../public/img/facebook.png" alt=""></a></li>
          <li><a href="#"><img  src="../public/img/twitter.png" alt=""></a></li>
          <li><a href="#"><img  src="../public/img/linkedin.png" alt=""></a></li>
        </ul>
      </div>
    </div>
  </nav>
  </header>
