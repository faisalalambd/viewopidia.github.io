<?php  $otp = ( $_REQUEST['otp']);
        $phone =$_GET['phone'];  
        include '../config.php';
        
          $sql = "SELECT * FROM user where username='$phone'";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
              echo $code=$row['otp'];
          }}
          if($otp!=$code){
              $text="Your OTP Does Not Match!! Please Try Again";
              header("Location:forgot-password.php?text='$text'"); 
          }else{
              header("Location:reset_password.php?phone=$phone"); 
          }
