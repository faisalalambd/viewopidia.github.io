<!-- ############################## Header Section ############################## -->
<?php
include('login.php'); // Includes Login Script
if(!isset($_SESSION['login_user'])){
header("location: index.php"); // Redirecting To Profile Page
}?>
<?php
include 'session.php';
include 'header.php';
include '../config.php';
$key=$_GET['key'];
?>



<section class="section">

    <div class="section-body">

        <div class="row">

            <div class="col-12">

                <div class="card">

                    <!-- ############################## Table Name ############################## -->
                    <div class="card-header">
                        <h4>Your Videos</h4>
                    </div>


                    <div class="card-body">

                        <div class="table-responsive">

                            <!-- ############################## Add New ############################## -->
                            <div class="text-right">
                                <a href="add_video.php" class="btn btn-icon icon-left btn-primary"><i class="fa-solid fa-plus"></i> Add New</a>
                            </div>
                          
                            <!-- ############################## Table ############################## -->
                            <table class="table table-striped table-hover" id="tableExport" style="width:100%;">

                                <thead>

                                    <tr class="text-center">

                                        <th>Thumbnil Image</th>
                                        <th>Edit Thumbnil & Video</th>
                                        <th>Video Title</th>
                                        <th>Share Link</th>
                                        <th>Views</th>
                                        <th>Earnings</th>
                                       
                                        <th>Action</th>

                                    </tr>

                                </thead>


                                <tbody>
                                   
                                   
                                    <?php
                                    $count=0;
 $sql = "SELECT * FROM video order by id desc";
              $result = $conn->query($sql);
              if ($result->num_rows > 0) {
              // output data of each row
              while($row = $result->fetch_assoc()) {
              $count++;?>
                                    <tr class="text-center">

                                        <td ><img src="../assets/img/<?php echo $row['thumbnil']?>" alt="Viewopidian" width="150" height="140"> </td>
                                        <td style="display: inline-flex" ><a href="#" class="btn btn-primary"> Change Thumbnil</a><a href="#"class="btn btn-danger">Change Video</a></td>
                                        <td><?php echo $row['title']?></td>
                                        <td>https://viewopidia.com/video.php?id=<?php echo $row['id']?></td>
                                        <td><?php echo $row['views']?></td>
                                        <td><?php echo $row['earning']?></td>
                                       
                                        <td style="display: inline-flex;">
                                            <a href="edit_video.php?id=<?php echo $row['id']?>" class="btn btn-icon btn-primary">Edit</a>
                                            <form action="delete_video.php?id=<?php echo $row['id']?>" method="post">
                                                <button type="submit" class="btn btn-icon btn-danger" style="margin-left: 5px">Delete</button>
                                            </form>
                                        </td>

                                    </tr>
                                 <?php }}?>
                                
                                   

                                </tbody>

                            </table>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>



<!-- ############################## Footer Section ############################## -->
<?php include 'footer.php' ?>