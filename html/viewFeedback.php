<?php 
    $severName="localhost";
    $username="root";
    $password="";
    $databaseName="myDB";
    
    $conn=mysqli_connect($severName,$username,$password,$databaseName);
    if(!$conn){
        echo "Not Connected";
    }
    $sql = "select * from feedback";
    $result = ($conn->query($sql)); 
    if ($result->num_rows > 0)  
    { 
        $row = $result->fetch_all(MYSQLI_ASSOC);   
    }   

    ?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- utilites -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
    crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- utilites -->
    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
    crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/sms/css/stylesheet.css">
    <title>SMS</title>
</head>
<body>
    <div class="filter"></div>
<header>
    <!-- Nav Bar -->

    <nav style="background-color:rgb(24, 18, 18) ; "
      class="navbar  navbar-expand-lg ">
      <div style="background-color:rgb(24, 18, 18) ;height: 6vh;" class="container-fluid">
        <!-- <img onclick="refresh()" class="navLogo" src="/CarBazzar/res/img/logo.png" alt> -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
          data-bs-target="#navbarNavAltMarkup"
          aria-controls="navbarNavAltMarkup" aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a style="color: #fff;" class="nav-link active" aria-current="page" href="index.php">Home</a>
        
            <!-- <a class="nav-link disabled" aria-disabled="true">Disabled</a> -->
          </div>
        </div>
      </div>
    </nav>
    
</header>
<main>
<h1 style="margin: 40px 0px;">Feedbacks</h1>
<form  action="/sms/php/deleteAll.php?file=feedback" method="post"><input class="button btn btn-outline-danger " type="submit" name="delete" value="Delete All Recordes"></form>
        <table  class="table table-primary" id="table">
            <thead>
                <tr>
                
                    <th>Name</th>
                    <th>Email</th>
                    <th>Feedback</th>
                </tr>
            </thead>
            <?php 
               if(!empty($row)) 
               foreach($row as $rows) 
              {  

              
            ?> 
            <tr class="table-warning"> 
  
            
                <td><?php echo $rows['name']; ?></td> 
                <td><?php echo $rows['email']; ?></td> 
                <td><?php echo $rows['feedback']; ?></td>  
                
          
            </tr> 
        
        <?php } ?> 
        
 
            </tbody>
        </table>
    </div>
    </body>
</html>