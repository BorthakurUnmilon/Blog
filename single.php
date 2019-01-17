<?php
  include('header.php');
  if(isset($_GET['post'])){
    $id = mysqli_real_escape_string($db,$_GET['post']);
    $query = "SELECT * FROM posts WHERE id='$id'";
  }
  $posts = $db->query($query);
  ?>
  <div class="row">
<?php if($posts->num_rows > 0){
    while($row = $posts->fetch_assoc()){
 ?>
  <!-- Cards for posts -->

     <div class="col s12 m8 l7">
       <!-- <div class="card"> -->
         <!-- <div class="card-image"> -->
           <!-- <img src="img/card1.jpg"> -->
           <h1><a href="single.php?post=<?php echo $row['id']; ?>"  class="green-text text-darken-3"><?php echo $row['title'];?> </a></h1>
         <!-- </div> -->
         <!-- <div class="card-content"> -->
           <p class="flow-text"><?php $body = $row['body'];
                echo $body;
           ?></p>
         <!-- </div> -->

     <!-- </div> -->

     </div>
     <?php } } ?>

     <?php include 'sidebar.php'; ?>
   </div>
   <?php include 'footer.php'; ?>
