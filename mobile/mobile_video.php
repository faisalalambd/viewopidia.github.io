<?php $id=$_GET['id'];
include_once 'config.php';
  $sql = "SELECT * FROM video where id=$id";
              $result = $conn->query($sql);
              if ($result->num_rows > 0) {
              // output data of each row
              while($row = $result->fetch_assoc()) {
                  $title=$row['title'];
                  $image=$row['thumbnil'];
                  $key=$row['keywords'];
                  $category=$row['category'];
              }}
              
              
include 'header.php';?>

<style>
    .embed-youtube {
    position: relative;
    padding-bottom: 56.25%; /* - 16:9 aspect ratio (most common) */
    /* padding-bottom: 62.5%; - 16:10 aspect ratio */
    /* padding-bottom: 75%; - 4:3 aspect ratio */
    padding-top: 30px;
    height: 0;
    overflow: hidden;
}

.embed-youtube iframe,
.embed-youtube object,
.embed-youtube embed {
    border: 0;
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}
</style>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-xl-8 col-md-12 col-lg-8">
                <div class="card">
                  <div class="card-header">
                      <?php
  $sql = "SELECT * FROM video where id=$id";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
      $category=$row['category'];
      $views=$row['views'];
?>
                    <h4><?php echo $row['title']?></h4>
                  </div>
                  <div class="card-body text-center">
                      
                   <iframe width="250" height="200" src="<?php echo $row['link']?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                         <div class="col-xl-8 col-md-12 col-lg-8">
                        <h5 Style="text-align:left"><a href="user_video.php?user_name=<?php echo $row['user_name']?>">Posted By: <?php echo $row['user_name']?></a></h5>  </div>
                          <h5 Style="text-align:left"> <a href="channel.php?youtube_channel_name=<?php echo $row['youtube_channel_name']?>">Credit : <?php echo $row['youtube_channel_name']?></a></h5>
                            <h6 Style="text-align:left">Views :<?php echo $row['views']?></h6>
                   
                    <?php }}?>
                    <?php
                                $views+=1;
                                $sql = "UPDATE video SET views='$views' WHERE id=$id";

                                    if ($conn->query($sql) === TRUE) {
                                      //echo "Record updated successfully";
                                    } else {
                                      //echo "Error updating record: " . $conn->error;
                                    }

                            ?>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-md-12 col-lg-4">
                  
                 <div class="row ">
              
            <?php
              $sql = "SELECT * FROM video where category='$category' order by id desc Limit 4";
              $result = $conn->query($sql);
              if ($result->num_rows > 0) {
              // output data of each row
              while($row = $result->fetch_assoc()) {
            ?>
             <section class="section">
    <div class="section-body">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            
          <div class="card">
            <div class="card-body">
              <div class="bootstrap snippet">
                <section id="portfolio" class="gray-bg padding-top-bottom">
                  <!-- ======= Portfolio items ===-->
                  <div class="projects-container scrollimation in">
                    <div class="row">
                         
 
            
                      <article class="col-md-12 col-sm-12 portfolio-item apps">
                        <div class="portfolio-thumb in">
                          <a href="video.php?id=<?php echo $row['id']?>" class="main-link">
                            <img class="img-responsive img-center text" src="assets/img/<?php echo $row['thumbnil']?>" alt="" width="100%" height="130">
                          </a>
                          <a class="link centered" href="video.php?id=<?php echo $row['id']?>" style="margin-left: -3rem;"><i class="fab fa-youtube" style="font-size: 5rem; margin-top: 0.5rem;"></i></a>
                        </div>
                        <h5 class="project-title" style="margin-top: 1rem;"><a href="video.php?id=<?php echo $row['id']?>"><?php echo $row['title']?></a></h5>
                      </article>

                    </div>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
            
            <?php }}?>
            <?php
 $ip= $_SERVER['REMOTE_ADDR'];
 echo $ip;
$sql = "INSERT INTO views_ip (user_ip,video_id) VALUES ('$ip','$id')";
if(mysqli_query($conn, $sql)){
//echo "Records added successfully.";
} else{
    $error=mysqli_error($conn);
   //echo "ERROR: Could not able to execute  $error" ;
}
            
            
        ?>    
            
        
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
            
            
            
           
          </div>
             
              
              </div>
            </div>
            
          
          
          </div>
        </section>
     
      </div>
    <?php include 'footer.php'?>