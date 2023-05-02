<!-- ############################## Header Section ############################## -->

<?php
include('login.php'); // Includes Login Script
if (!isset($_SESSION['login_user'])) {
    header("location: index.php"); // Redirecting To Profile Page
} ?>
<?php
include 'session.php';
include 'header.php';
$text = $_GET['text']; ?>
<?php
$sql = "SELECT * FROM user where username='$login_session'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {

        $name = $row['user_name'];
        $email = $row['email'];
        $country = $row['country'];
        $city = $row['city'];
        $id = $row['id'];
        $payment_method = $row['payment_method'];
        $payment_address = $row['payment_address'];
    }
} ?>


<section class="section">
    <div class="container mt-5">
        <div class="row">


            <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2 text-center">
                <script type="text/javascript">
                    atOptions = {
                        'key': '2f94eee034ab5496c3eae3455db967af',
                        'format': 'iframe',
                        'height': 50,
                        'width': 320,
                        'params': {}
                    };
                    document.write('<scr' + 'ipt type="text/javascript" src="http' + (location.protocol === 'https:' ? 's' : '') + '://trinitywishful.com/2f94eee034ab5496c3eae3455db967af/invoke.js"></scr' + 'ipt>');
                </script>
            </div>





            <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
                <div class="card card-primary">
                    <div class="card-header">
                        <h4>Edit Profile</h4>
                        <h5 style="color=green"><?php echo $text ?></h5>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="update_profile.php?id=<?php echo $id ?>">

                            <div class="row">
                                <div class="form-group col-6">
                                    <label for="frist_name">Full Name</label>
                                    <input id="frist_name" type="text" class="form-control" name="user_name" value="<?php echo $name ?>" autofocus required>
                                </div>
                                <div class="form-group col-6">
                                    <label for="last_name">Phone Number</label>
                                    <input id="last_name" type="text" class="form-control" value="<?php echo $login_session ?>" name="username" readonly>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="email">Email</label>
                                <input id="email" type="email" class="form-control" value="<?php echo $email ?>" name="email" required>
                                <div class="invalid-feedback">
                                </div>
                            </div>



                            <div class="row">
                                <div class="form-group col-6">
                                    <label for="password" class="d-block">Country</label>
                                    <input id="password" type="text" class="form-control pwstrength" data-indicator="pwindicator" name="country" value="<?php echo $country ?>" required>
                                    <div id="pwindicator" class="pwindicator">
                                        <div class="bar"></div>
                                        <div class="label"></div>
                                    </div>
                                </div>
                                <div class="form-group col-6">
                                    <label for="password2" class="d-block">City</label>
                                    <input id="password2" type="text" class="form-control" value="<?php echo $city ?>" name="city" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Payment Method</strong></label>
                                <div class="col-sm-3">
                                    <select class="form-control selectric" name="method" required>
                                        <option value="<?php echo $payment_method ?>"><?php echo $payment_method ?></option>
                                        <option>Paypal</option>
                                        <option>Bkash</option>
                                        <option>Nagad</option>
                                        <option>Rocket</option>
                                    </select>
                                </div>
                                <label class="col-sm-3 col-form-label"><strong>Payment Address</strong></label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" placeholder="Mail or Phone Number " value="<?php echo $payment_address ?>" name="address" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-lg btn-block">
                                    Submit
                                </button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>


            <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2 text-center">
                <script type="text/javascript">
                    atOptions = {
                        'key': '2f94eee034ab5496c3eae3455db967af',
                        'format': 'iframe',
                        'height': 50,
                        'width': 320,
                        'params': {}
                    };
                    document.write('<scr' + 'ipt type="text/javascript" src="http' + (location.protocol === 'https:' ? 's' : '') + '://trinitywishful.com/2f94eee034ab5496c3eae3455db967af/invoke.js"></scr' + 'ipt>');
                </script>
            </div>
        </div>
    </div>
</section>



<!-- ############################## Footer Section ############################## -->
<?php include 'footer.php' ?>