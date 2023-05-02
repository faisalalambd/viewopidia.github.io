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
include 'income_summery.php';
$text = $_GET['text'];
?>



<section class="section">

    <div class="section-body">

        <div class="row">




            <div class="col-12 text-center">

                <script type="text/javascript">
                    atOptions = {
                        'key': 'bdf97bd4a94d30a0f2467bb36efbb3ea',
                        'format': 'iframe',
                        'height': 90,
                        'width': 728,
                        'params': {}
                    };
                    document.write('<scr' + 'ipt type="text/javascript" src="http' + (location.protocol === 'https:' ? 's' : '') + '://trinitywishful.com/bdf97bd4a94d30a0f2467bb36efbb3ea/invoke.js"></scr' + 'ipt>');
                </script>

            </div>




            <div class="col-12">

                <div class="card">

                    <!-- ############################## Table Name ############################## -->
                    <div class="card-header">
                        <h4>Payment History</h4><br>
                        <h5 style=color:red><?php echo $text ?></h5>
                    </div>


                    <div class="card-body">

                        <div class="table-responsive">

                            <!-- ############################## Add New ############################## -->



                            <!-- ############################## Table ############################## -->
                            <table class="table table-striped table-hover" id="tableExport" style="width:100%;">

                                <thead>

                                    <tr>

                                        <th>Date</th>
                                        <th>Balance</th>
                                        <th>Status</th>


                                    </tr>

                                </thead>


                                <tbody>


                                    <?php
                                    $count = 0;
                                    $sql = "SELECT * FROM withdraw  where phone='$login_session' order by id desc";
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while ($row = $result->fetch_assoc()) {
                                            $count++; ?>
                                            <tr>
                                                <td><?php echo $row['date'] ?></td>
                                                <td><?php echo $row['w_balance'] ?></td>
                                                <td><?php echo $row['status'] ?></td>
                                            </tr>
                                            <?php if ($count % 3 == 0) { ?>

                                                <div class="col-12 text-center">

                                                    <script type="text/javascript">
                                                        atOptions = {
                                                            'key': '609d8346946376731748c4c73ebcae8d',
                                                            'format': 'iframe',
                                                            'height': 250,
                                                            'width': 300,
                                                            'params': {}
                                                        };
                                                        document.write('<scr' + 'ipt type="text/javascript" src="http' + (location.protocol === 'https:' ? 's' : '') + '://trinitywishful.com/609d8346946376731748c4c73ebcae8d/invoke.js"></scr' + 'ipt>');
                                                    </script>

                                                </div>
                                    <?php }
                                        }
                                    } ?>



                                </tbody>

                            </table>

                        </div>

                    </div>

                </div>

            </div>

            <div class="col-12 text-center">

                <script type="text/javascript">
                    atOptions = {
                        'key': 'bdf97bd4a94d30a0f2467bb36efbb3ea',
                        'format': 'iframe',
                        'height': 90,
                        'width': 728,
                        'params': {}
                    };
                    document.write('<scr' + 'ipt type="text/javascript" src="http' + (location.protocol === 'https:' ? 's' : '') + '://trinitywishful.com/bdf97bd4a94d30a0f2467bb36efbb3ea/invoke.js"></scr' + 'ipt>');
                </script>

            </div>

        </div>

    </div>

</section>



<!-- ############################## Footer Section ############################## -->
<?php include 'footer.php' ?>