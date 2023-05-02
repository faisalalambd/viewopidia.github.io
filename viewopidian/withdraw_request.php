<!-- ############################## Header Section ############################## -->
<?php
include('login.php'); // Includes Login Script
if (!isset($_SESSION['login_user'])) {
    header("location: index.php"); // Redirecting To Profile Page
}

?>
<?php
include 'session.php';
include 'header.php';
include '../config.php';
$text = $_GET['text'];
?>

<?php
$sql = "SELECT * FROM user where username='$login_session'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $due = $row['due'];
    }
} ?>
<?php include 'income_summery.php' ?>
<section class="section">
    <div class="container mt-5">
        <div class="row">





            <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
                <script type="text/javascript">
                    atOptions = {
                        'key': 'bdf97bd4a94d30a0f2467bb36efbb3ea',
                        'format': 'iframe',
                        'height': 90,
                        'width': 728,
                        'params': {}
                    };
                    document.write('<scr' + 'ipt type="text/javascript" src="http' + (location.protocol === 'https:' ? 's' : '') + '://www.effectivedisplayformats.com/bdf97bd4a94d30a0f2467bb36efbb3ea/invoke.js"></scr' + 'ipt>');
                </script>
            </div>

            <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
                <div class="card card-primary">
                    <div class="card-header">
                        <h4>Withdraw</h4>
                        <h5 style="color:red"><?php echo $text ?></h5>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="withdraw.php">

                            <div class="row">
                                <div class="form-group col-6">
                                    <label for="frist_name">Your Current Ammount</label>
                                    <input id="frist_name" type="text" class="form-control" name="balance" value=" <?php echo $due ?>" readonly>
                                </div>
                                <div class="form-group col-6">
                                    <label for="last_name">Withdraw Ammount</label>
                                    <input id="last_name" type="text" class="form-control" placeholder="$0" name="withdraw" value="" required>
                                </div>
                            </div>


                            <div class="row">



                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block text-right">
                                        Withdraw
                                    </button>
                                </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
            <script type="text/javascript">
                atOptions = {
                    'key': 'bdf97bd4a94d30a0f2467bb36efbb3ea',
                    'format': 'iframe',
                    'height': 90,
                    'width': 728,
                    'params': {}
                };
                document.write('<scr' + 'ipt type="text/javascript" src="http' + (location.protocol === 'https:' ? 's' : '') + '://www.effectivedisplayformats.com/bdf97bd4a94d30a0f2467bb36efbb3ea/invoke.js"></scr' + 'ipt>');
            </script>
        </div>



    </div>
</section>





<!-- ############################## Footer Section ############################## -->
<?php include 'footer.php' ?>