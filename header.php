<?php
  include 'config.php';
  include 'db_connect.php';

  $query = "SELECT * FROM categories";
  $categories = $db->query($query);
 ?>
<!DOCTYPE html>
<html lang="en">
<head><main>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css" />
  <link type="text/css" rel="stylesheet" href="css/style.css" />

  <title>Personal Blog</title>
</head>
<body>

  <!-- Navbar -->
  <nav class="cyan darken-1">
    <div class="nav-wrapper">
      <div class="container">
      <a href="#" class="brand-logo">Blog</a>
      <ul class="hide-on-med-and-down right">

        <li class="active"><a href="index.php">Dashboard</a></li>
        <?php
          if($categories->num_rows > 0){
            while($row = $categories->fetch_assoc()){
        ?>
          <li><a href="index.php?categories=<?php echo $row['id']; ?>"><?php echo $row['text']; ?></a></li>
        <?php } } ?>
        <li><a href="#" data-activates="side-nav" class="button-collapse show-on-large right">
          <i class="material-icons">menu</i></a>
        </li>

      </ul>
      <ul id="side-nav" class="side-nav">
        <li>
          <div class="user-view">
            <div class="background">
              <img src="img/back_dash.jpg" alt="">
            </div>
            <a href="#">
              <img src="img/person1.jpg"class="circle" alt="">
            </a>
            <span class="name white-text bold">Unmilon Borthakur</span>
            <span class="email white-text">unmilon.7122@gmail.com</span>
          </div>
        </li>
        <!-- Dashboard contents and sidenav -->
        <li>
        </li>
        <li>
          <a class="subheader"><i class="material-icons">dashboard</i>Dashboard</a>
        <a href="posts.html"><i class="material-icons">post</i>Posts</a>
        </li>
        <li>
        <a href="unmilonborthakur.com"><i class="material-icons">post</i>Portfolio</a>
        </li>
        <li>
          <div class="divider"></div>
        <a class="subheader"><i class="material-icons">call</i>Contact</a>
        </li>
        <li><a><i class="material-icons"></i>Phone</a></li>
        <!-- CONTACT DETAILS -->



      </ul>
    </div>
    </div>
  </nav>
