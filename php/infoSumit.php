<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Register</title>
</head>
<body >
    
<?php 
$severName="localhost";
$username="root";
$password="";
$databaseName="myDB";

$conn=mysqli_connect($severName,$username,$password,$databaseName);
if(!$conn){
    echo "Not Connected";
}
$Name=$_POST["name"];
$RollNo=$_POST["rollno"];
$S1=$_POST["s1"];
$S2=$_POST["s2"];
$S3=$_POST["s3"];
$S4=$_POST["s4"];
$Add=(int)$S1+(int)$S2+(int)$S3+(int)$S4;
$Avg=$Add/4;

$myQuery="INSERT INTO marks VALUES('$Name','$RollNo','$S1','$S2','$S3','$S4','$Avg')";
if(!mysqli_query($conn,$myQuery)){
    
    echo "
    <script type='text/JavaScript'>alert('Not Inserted') </script>";
}else{
    // echo "
    // <script type='text/JavaScript'>alert('Information is Inserted into Database') </script>";
}

?>
<script>
    window.location = "/sms/html/index.php";

</script>
<!-- <script src="/CarBazzar/js/onClickScript.js"></script> -->
<!-- </body>
</html> -->