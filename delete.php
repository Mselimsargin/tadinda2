<?php
$link = mysqli_connect("localhost","root","","tadinda"); 
if($link===false){
   die("ERROR:Could not connect.".mysqli_connect_error());
}
    $submit_masa=$_GET['masa'];
    $submit_kind=$_GET['kind'];
    $sql = "DELETE FROM orders WHERE masa='$submit_masa' AND kind='$submit_kind'";
    $stmt=$link->prepare($sql);
    $success = $stmt->execute();
    if($success){
        ?>
        <!DOCTYPE html>
        <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
        <title>Tadında-Welcome</title>
    
    </head>
    <body>
        <h3>Prepared Successfully</h3>
        <a href="chef.php">Click to back homepage</a>
    </body>
    </html>
        <?php
    } else {
        echo "again";
    }

    mysqli_close($link);

?>    
  

