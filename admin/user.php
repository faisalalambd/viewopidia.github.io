<!-- ############################## Header Section ############################## -->
<?php
include('login.php'); // Includes Login Script
if(!isset($_SESSION['login_user'])){
header("location: index.php"); // Redirecting To Profile Page
}?>
<?php include 'header.php';
include '../config.php'?>



<section class="section">

    <div class="section-body">

        <div class="row">

            <div class="col-12">

                <div class="card">

                    <!-- ############################## Table Name ############################## -->
                    <div class="card-header">
                        <h4>Registered User</h4>
                    </div>


                    <div class="card-body">

                        <div class="table-responsive">

                            <!-- ############################## Add New ############################## -->
                            <!--<div class="text-right">-->
                            <!--    <a href="form.php" class="btn btn-icon icon-left btn-primary"><i class="fa-solid fa-plus"></i> Add New</a>-->
                            <!--</div>-->


                            <!-- ############################## Table ############################## -->
                            <table class="table table-striped table-hover" id="tableExport" style="width:100%;">

                                <thead>

                                    <tr>

                                        <th>Sl No.</th>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Phone</th>
                                        <th>Email</th>
                                        <th>Country</th>
                                        <th>City</th>
                                        <th>Action</th>

                                    </tr>

                                </thead>


                                <tbody>
<?php
                                    $count=0;
 $sql = "SELECT * FROM user  order by id desc";
              $result = $conn->query($sql);
              if ($result->num_rows > 0) {
              // output data of each row
              while($row = $result->fetch_assoc()) {
              $count++;?>
                                    <tr>

                                        <td><?php echo $count?></td>
                                        <td><?php echo $row['id']?></td>
                                        <td><?php echo $row['user_name']?></td>
                                        <td><?php echo $row['username']?></td>
                                        <td><?php echo $row['email']?></td>
                                        <td><?php echo $row['country']?></td>
                                          <td><?php echo $row['city']?></td>
                                        
                                        <td style="display: inline-flex;">
                                            <a href="#" class="btn btn-icon btn-primary">Edit</a>
                                            <form action="#" method="post">
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