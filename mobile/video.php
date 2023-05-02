<?php $id=$_GET['id'];?>

<?php 
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
              <div class="col-xl-9 col-md-12 col-lg-8">
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
      $channel=$row['youtube_channel_name'];
      $user_name=$row['user_name'];
      $user_phone=$row['user_phone'];
?>
                    <h4><?php echo $row['title']?></h4>
                  </div>
                  <div class="card-body text-center">
                      
                   <iframe width="250" height="200" src="<?php echo $row['link']?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                         <div class="col-xl-8 col-md-12 col-lg-8">
                         </div>
                          <h4 Style="text-align:left; padding-top:20px"> <a href="channel.php?youtube_channel_name=<?php echo $row['youtube_channel_name']?>">Credit : <?php echo $row['youtube_channel_name']?></a></h4>
                            <h5 Style="text-align:left"><a href="user_video.php?user_name=<?php echo $row['user_name']?>">Posted By: <?php echo $row['user_name']?></a></h5>
                            <h6 Style="text-align:left">Views :<?php echo $row['views']?></h6>
                  <?php  //Earning Calculation
                              if($views>50){
                                  $earning_view=$views-50;
                                  $earning=1/1300;
                                  $your_earning=$earning_view*$earning;
                              }else{
                                  $your_earning=0;
                                  
                              }
                               $sql = "UPDATE video SET earning='$your_earning' where id=$id";
            
                                                    if ($conn->query($sql) === TRUE) {
                                                        // echo "Record updated successfully";
                                                        } else {
                                                        // echo "Error updating record: " . $conn->error;
                                                        }
                                                        
                                                         //Earning Calculation?>
                    <?php }}?>
                    <?php
                                //Ip White listing
                  $sql = "SELECT * FROM views_ip where video_id=$id";
                              $result = $conn->query($sql);
                              if ($result->num_rows > 0) {
                              // output data of each row
                              while($row = $result->fetch_assoc()) {
                               if($row['user_ip']!=$ip){
                                   $keys=1;
                               }else{
                                   $keys=0;
                               }
                              }}
                            //   echo $keys;
                              if($keys==1){
                                //   $views++;
                              }
                              //Ip White listing
                              
                                $sql = "UPDATE video SET views='$views' WHERE id=$id";

                                    if ($conn->query($sql) === TRUE) {
                                      //echo "Record updated successfully";
                                    } else {
                                      //echo "Error updating record: " . $conn->error;
                                    }

                            ?>
                  </div>
                </div>
                
                            <section class="section">
    <div class="section-body">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <h3><a href="channel.php?user_name=<?php echo $user_name?>">More Videos on <?php echo $user_name?></a></h3>
          <div class="card">
            <div class="card-body">
              <div class="bootstrap snippet">
                <section id="portfolio" class="gray-bg padding-top-bottom">
                  <!-- ======= Portfolio items ===-->
                  <div class="projects-container scrollimation in">
                    <div class="row">
                         
<?php
              $sql = "SELECT * FROM video where ((user_phone='$user_phone')&&(id!=$id)) order by id desc Limit 12";
              $result = $conn->query($sql);
              if ($result->num_rows > 0) {
              // output data of each row
              while($row = $result->fetch_assoc()) {
            ?>
                      <article class="col-md-3 col-sm-6  portfolio-item apps">
                        <div class="portfolio-thumb in">
                          <a href="video.php?id=<?php echo $row['id']?>" class="main-link">
                            <img class="img-responsive img-center" src="../assets/img/<?php echo $row['thumbnil']?>" alt="Viewopidian" width="100%" height="150">
                          </a>
                          <a class="link centered" href="video.php?id=<?php echo $row['id']?>" style="margin-left: -3rem;"><i class="fab fa-youtube" style="font-size: 5rem; margin-top: 0.5rem;"></i></a>
                        </div>
                        <h5 class="project-title" style="margin-top: 1rem;"><a href="video.php?id=<?php echo $row['id']?>"><?php echo $row['title']?></a></h5>
                      </article>
<?php }}?>
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
                 <section class="section">
    <div class="section-body">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <h3><a href="channel.php?youtube_channel_name=<?php echo $channel?>">More Videos on <?php echo $channel?></a></h3>
          <div class="card">
            <div class="card-body">
              <div class="bootstrap snippet">
                <section id="portfolio" class="gray-bg padding-top-bottom">
                  <!-- ======= Portfolio items ===-->
                  <div class="projects-container scrollimation in">
                    <div class="row">
                         
<?php
              $sql = "SELECT * FROM video where youtube_channel_name='$channel' order by id desc Limit 8";
              $result = $conn->query($sql);
              if ($result->num_rows > 0) {
              // output data of each row
              while($row = $result->fetch_assoc()) {
            ?>
                      <article class="col-md-3 col-sm-6 col-xs-6 portfolio-item apps">
                        <div class="portfolio-thumb in">
                          <a href="video.php?id=<?php echo $row['id']?>" class="main-link">
                            <img class="img-responsive img-center" src="../assets/img/<?php echo $row['thumbnil']?>" alt="Viewopidian" width="100%" height="150">
                          </a>
                          <a class="link centered" href="video.php?id=<?php echo $row['id']?>" style="margin-left: -3rem;"><i class="fab fa-youtube" style="font-size: 5rem; margin-top: 0.5rem;"></i></a>
                        </div>
                        <h5 class="project-title" style="margin-top: 1rem;"><a href="video.php?id=<?php echo $row['id']?>"><?php echo $row['title']?></a></h5>
                      </article>
<?php }}?>
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
              </div>
              
              
              
              
              
              
              
              
              
              <div class="col-xl-3 col-md-12 col-lg-4">
                  
                 <div class="row ">
              
            <?php
              $sql = "SELECT * FROM video where category='$category' order by id desc Limit 8";
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
                            <img class="img-responsive img-center text" src="../assets/img/<?php echo $row['thumbnil']?>" alt="Viewopidian" width="100%" height="130">
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