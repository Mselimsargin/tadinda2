<?php

$link = mysqli_connect("localhost","root","","tadinda");

if($link===false){
    die("ERROR:Could not connect.".mysqli_connect_error());

}
if(isset($_POST['submit'])){
    foreach($_POST['orderers'] as $row => $value){
            $isim=$_REQUEST['isim'];
            $surname=$_REQUEST['surname'];
            $masa=$_REQUEST['masa'];
            $orderers=$_REQUEST['orderers'][$row];
            $total=$_REQUEST['total'][$row];
            $total=substr($total,1);
            $kind=$_REQUEST['kind'][$row];
            $tarih=date("Y/m/d");
            $saat=date("h:i");


            $sql="INSERT INTO orders (isim,surname,masa,orderers,total,kind,tarih,saat) VALUES ('$isim','$surname','$masa','$orderers','$total','$kind','$tarih','$saat')";
            $sql2="INSERT INTO muhasebe (isim,surname,masa,orderers,total,kind,tarih,saat) VALUES ('$isim','$surname','$masa','$orderers','$total','$kind','$tarih','$saat')";

            $stmt=$link->prepare($sql);
            $success = $stmt->execute();
            $stmt2=$link->prepare($sql2);
            $success2 = $stmt2->execute();
            }
    
}
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
    <h3>Your order was sent succesfully</h3>
    <a href="index.html">Click to back homepage</a>
</body>
</html>
    <?php
} else {
    echo "again";
}
 mysqli_close($link);
?>

<script>
    localStorage.clear();

</script>