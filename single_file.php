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
       <div class="card">
         <div class="card-image">
           <img src="img/card1.jpg">
           <span class="card-title"><a href="single.php?post=<?php echo $row['id']; ?>"><?php echo $row['title'];?> </a></span>
         </div>
         <div class="card-content">
           <p><?php $body = $row['body'];
                echo substr($body,0,400);
           ?></p>
         </div>
         <div class="card-action cyan darken-3">
           <a href="<?php echo $row['id']; ?>">Read more...</a>
         </div>
     </div>

     </div>
     <?php } } ?>

     <?php include 'sidebar.php'; ?>
   </div>
   <?php include 'footer.php'; ?>
