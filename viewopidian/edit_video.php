<?php
include('login.php'); // Includes Login Script
if (!isset($_SESSION['login_user'])) {
    header("location: index.php"); // Redirecting To Profile Page
} ?>
<!-- ############################## Header Section ############################## -->
<?php include 'header.php';
$id = $_GET['id'];
include '../config.php'; ?>
<?php
$sql = "SELECT * FROM video  where id=$id";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $title = $row['title'];
        $category = $row['category'];
        $feature = $row['feature'];
        $keyword = $row['keywords'];
    }
} ?>


<section class="section">

    <div class="section-body">

        <div class="row">

            <div class="col-12 col-md-12 col-lg-12">

                <div class="card">

                    <!-- ############################## Form Name ############################## -->
                    <div class="card-header">
                        <h4>Form</h4>
                    </div>


                    <!-- ############################## Form ############################## -->
                    <form action="update_video.php?id=<?php echo $id ?>" method="post" enctype="multipart/form-data">

                        <div class="card-body">



                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Video Title</strong></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="<?php echo $title ?>" value="<?php echo $title ?>" name="title" required>
                                </div>
                            </div>

                            <!-- <div class="form-group row">-->
                            <!--    <label class="col-sm-3 col-form-label"><strong>Description</strong></label>-->
                            <!--    <div class="col-sm-9">-->
                            <!--        <textarea class="summernote" name="description"></textarea>-->
                            <!--    </div>-->
                            <!--</div>-->

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Category</strong></label>
                                <div class="col-sm-9">
                                    <select class="form-control selectric" name="category">
                                        <option value="<?php echo $category ?>"><?php echo $category ?></option>
                                        <option>News</option>
                                        <option>Political</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Feature</strong></label>
                                <div class="col-sm-9">
                                    <select class="form-control selectric" name="feature" value="<?php echo $feature ?>">
                                        <option>Featured</option>

                                    </select>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Keywords</strong></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Keywords1, keyword 2,Keywords3,......" value="<?php echo $keyword ?>" name="Keywords" required>
                                </div>
                            </div>


                            <!--<div class="form-group row">-->
                            <!--    <label for="inputEmail3" class="col-sm-3 col-form-label"><strong>Email</strong></label>-->
                            <!--    <div class="col-sm-9">-->
                            <!--        <input type="email" class="form-control" id="inputEmail3" placeholder="Email" value="" name="email" required>-->
                            <!--    </div>-->
                            <!--</div>-->


                            <!--<div class="form-group row">-->
                            <!--    <label for="inputPassword3" class="col-sm-3 col-form-label"><strong>Password</strong></label>-->
                            <!--    <div class="col-sm-9">-->
                            <!--        <input type="password" class="form-control" id="inputPassword3" placeholder="Password" value="" name="password" required>-->
                            <!--    </div>-->
                            <!--</div>-->





                            <!--<div class="form-group row">-->
                            <!--    <div class="col-sm-3"><strong>Checkbox</strong></div>-->
                            <!--    <div class="col-sm-9">-->
                            <!--        <div class="form-check">-->
                            <!--            <div class="custom-control custom-checkbox">-->
                            <!--                <input type="checkbox" class="custom-control-input" id="customCheck2">-->
                            <!--                <label class="custom-control-label" for="customCheck2">Example Checkbox</label>-->
                            <!--            </div>-->
                            <!--        </div>-->
                            <!--    </div>-->
                            <!--</div>-->







                        </div>


                        <div class="card-footer">
                            <button type="submit" name="uploadfile">submit

                            </button>
                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</section>



<!-- ############################## Footer Section ############################## -->
<?php include 'footer.php' ?>