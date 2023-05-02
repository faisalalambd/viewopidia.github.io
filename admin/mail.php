<?php
include '../config.php';
$name="Shifat E Rasul";
$title="Ifter Receipis";
$link="https://viewopidia.com/video.php?id=594";
                               
 $sql = "SELECT * FROM user where id=1";
              $result = $conn->query($sql);
              if ($result->num_rows > 0) {
              // output data of each row
              while($row = $result->fetch_assoc()) {
             $email=$row['email'];
// the message
$msg = $name."\n Uploaded ".$title."\n Watch Here : ".$link;

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email
mail("$email","Special Recipe For Iftar",$msg);
}}
?>