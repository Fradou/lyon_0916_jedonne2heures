<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <?php
    include 'inc/links.php';
  ?>
  <title>Je donne 2 heures</title>

</head>

<style>
  .navbar-nav > li > a {
    line-height: 32px;
  }

  .nav-social {
    display: flex;
    flex-direction: row;
  }

  img {
    height: 32px;
    opacity: 0.5;
  }
  img:hover{
    opacity: 1;
  }
</style>

  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Je donne 2 heures</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li class="active"><a href="#">Home</a></li>
          <li><a href="#">Je donne</a></li>
          <li><a href="#">Je propose</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right nav-social">
          <li><a href="#">Contactez-nous</a></li>
          <li><a href="#"><img src="../public/img/facebook.png" alt=""></a></li>
          <li><a href="#"><img  src="../public/img/twitter.png" alt=""></a></li>
          <li><a href="#"><img  src="../public/img/linkedin.png" alt=""></a></li>
        </ul>
      </div>
    </div>
  </nav>

<body>
