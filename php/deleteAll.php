<?php

$severName="localhost";
    $username="root";
    $password="";
    $databaseName="myDB";
    
    $conn=mysqli_connect($severName,$username,$password,$databaseName);
    if(!$conn){
        echo "Not Connected";
    }
if( $_GET['file']=="index"){

    $sql = "DELETE from marks";
    $result = ($conn->query($sql)); 
    echo '<script>
    window.location = "/sms/html/index.php";
</script>';
// echo  "I'm index";
}
else{
    
    $sql = "DELETE from feedback";
    $result = ($conn->query($sql)); 
    
    echo '<script>
    window.location = "/sms/html/viewFeedback.php";
    </script>';
    // echo  "I'm feedback";
}
    

?>
