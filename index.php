<?php
  include('header.php');
  if(isset($_GET['categories'])){
    $categories = mysqli_real_escape_string($db,$_GET['categories']);
    $query = "SELECT * FROM posts WHERE category='$categories'";
  }else{
  $query = "SELECT * FROM posts";
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
           <span class="card-title"><a href="single.php?post=<?php echo $row['id']; ?>" class="white-text"><?php echo $row['title'];?> </a></span>
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
   <!-- <div class="row">
      <div class="col s12 m8 l8">
        <div class="card">
          <div class="card-image">
            <img src="img/card1.jpg">
            <span class="card-title">Card Title</span>
          </div>
          <div class="card-content">
            <p>I am a very simple card. I am good at containing small bits of information.
            I am convenient because I require little markup to use effectively.</p>
          </div>
          <div class="card-action">
            <a href="#">Read more...</a>
          </div>
        </div>
      </div>
      <div class="col s12 m8 l8">
        <div class="card">
          <div class="card-image">
            <img src="img/card1.jpg">
            <span class="card-title">Card Title</span>
          </div>
          <div class="card-content">
            <p>I am a very simple card. I am good at containing small bits of information.
            I am convenient because I require little markup to use effectively.</p>
          </div>
          <div class="card-action">
            <a href="#">Read more...</a>
          </div>

        </div>
      </div>
    </div> -->
  <!-- Recent Posts -->
  <section class="section section-recent">
    <div class="row">

    </div>
  </section>

  <!-- Footer -->
<?php include 'footer.php';?>
