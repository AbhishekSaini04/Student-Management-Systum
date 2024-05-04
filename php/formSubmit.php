<!-- <!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FeedBack</title>
</head>
<body > -->
    
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
$Email=$_POST["email"];
$Feedback=$_POST["feedback"];

$myQuery="INSERT INTO feedback VALUES('$Name','$Email','$Feedback')";
if(!mysqli_query($conn,$myQuery)){
    
    echo "
    <script type='text/JavaScript'>alert('Your FeedBack Is Not Registred') </script>";
}

?>
<script>
    alert("Your FeedBack Is Registerd SUCCESSFULLY!");
    window.location = "/sms/html/index.php#feedback";

</script>
<!-- <script src="/CarBazzar/js/onClickScript.js"></script> -->
<!-- </body>
</html> -->