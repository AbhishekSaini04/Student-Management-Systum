<?php

$severName="localhost";
    $username="root";
    $password="";
    $databaseName="myDB";
    
    $conn=mysqli_connect($severName,$username,$password,$databaseName);
    if(!$conn){
        echo "Not Connected";
    }
    $rollno= $_GET['rollno'];
    $sql = "DELETE  FROM marks WHERE  name =$rollno";
    try{
        if(        $conn->query($sql)
        ){
            echo"Deleted";
        }
    }
    catch (e){
        die(e);

    }
    
    ?>
    <script>
    window.location = "/sms/html/index.php";

</script>
    
