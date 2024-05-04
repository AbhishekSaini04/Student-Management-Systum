    <?php 
    $severName="localhost";
    $username="root";
    $password="";
    $databaseName="myDB";
    
    $conn=mysqli_connect($severName,$username,$password,$databaseName);
    if(!$conn){
        echo "Not Connected";
    }
    $sql = "select * from marks";
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
            <a style="color: #fff;" class="nav-link" href="viewFeedback.php">View FeedBacks</a>
            <!-- <a class="nav-link disabled" aria-disabled="true">Disabled</a> -->
          </div>
        </div>
      </div>
    </nav>
    
</header>
<main><h1 style="margin: 59px 0px;">Student Management System</h1>
    <form action="/sms/php/infoSumit.php" method="post">
    <div class="input-container">
      <input style="color: black; background-color: floralwhite;"  class="form-control" required type="text" placeholder="Name"    id="name"   name="name"   >
      <input style="color: black; background-color: floralwhite;"  class="form-control" required type="number" placeholder="Roll No."  id="rollno"  name="rollno"  >
      <input style="color: black; background-color: floralwhite;"  class="form-control" required type="number" placeholder="O.S. Marks"     id="S1"    name="s1"    >
      <input  style="color: black; background-color: floralwhite;" class="form-control" required type="number" placeholder="C Language Marks"     id="S2"    name="s2"    >
      <input style="color: black; background-color: floralwhite;"  class="form-control" required type="number" placeholder="D.C. Marks"     id="S3"    name="s4"    >
      <input style="color: black; background-color: floralwhite;"  class="form-control" required type="number" placeholder="D.E. Marks"     id="S4"    name="s3"    >
    </div>
    
    <button  class="button btn btn-outline-info" type="submit" id="submit">Add Student Information</button>
    
  </form> 
  <form  action="/sms/php/deleteAll.php?file=index" method="post"><input class="button btn btn-outline-danger " type="submit" name="delete" value="Delete All Recordes"></form>
    <!-- <form action="">

      <input class="" type="submit" >
    </form> -->

        <table  class="table table-primary" id="table">
            <thead>
                <tr >
                    <!-- <th>ID</th> -->
                    <th>Roll No.</th>
                    <th>Name</th>
                    <th>O.S.</th>
                    <th>C </th>
                    <th>D.C.</th>
                    <th>D.E.</th>
                    <th>Average</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <?php 
               if(!empty($row)) 
               foreach($row as $rows) 
              {  

              
            ?> 
            <tr class="table-warning"> 
  
            
                <td><?php echo $rows['name']; ?></td> 
                <td><?php echo $rows['rollno']; ?></td> 
                <td><?php echo $rows['s1']; ?></td> 
                <td><?php echo $rows['s2']; ?></td> 
                <td><?php echo $rows['s3']; ?></td> 
                <td><?php echo $rows['s4']; ?></td> 
                <td><?php echo $rows['avg']."%"; ?></td> 
                <td><?php if($rows['avg']>=33){
                          echo "Pass";  } 
                          else{
                            echo"Fail";
                          }
                 ?></td> 
                
                 <td><?php
                  $link="/sms/php/deleteRow.php?rollno=";
                  $name=$rows['name'];
                   echo "<a href='$link $name'>   Delete Record </a>";      ?> </td>


            </tr> 
        
        <?php } ?> 
        
 
            </tbody>
        </table>
    </div>


</main>
<footer 
class=" bd-footer py-4 py-md-5 mt-5 ">
<div 
  class="container py-4 py-md-5 px-4 px-md-3 text-body-secondary">
  <div class="row">
    <div class="col-6 col-lg-2 mb-3">
      <h5>Our Team</h5>
      <ul class="list-unstyled">
        <li class="mb-2"><a href=""></a></li>
        

      </ul>
    </div>


    <div class="col-6 col-lg-2 mb-3">
      <h5 id="aboutUs">About Us</h5>
      <p style="color: rgb(241, 231, 231);">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet necessitatibus magni sapiente autem recusandae</p>
    </div>
    <div class="col-6 col-lg-2 mb-3">
      <h5 id="contectUs">Contect Us On</h5>
      <ul class="list-unstyled">
        <div class="center">
          <li class="mb-2"><a href="https://www.instagram.com/parteek_bamal_"><i
                class="fa-brands fa-square-instagram  insta"></a></i></li>
          <li class="mb-2"><a href="https://t.snapchat.com/ACPGXEOY"><i
                class="snap fa-brands fa-square-snapchat"></a></i></li>
                <li style="color: #fff;" ></li>
                <li style="color: #fff;" ></li>
          <!-- <li class="mb-2"><a href><i
                class="fb fa-brands fa-square-facebook"></a></i></li> -->
        </div>
      </ul>
    </div>

    <div  id="feedback" class="feedback col-6 col-lg-2 mb-3">
      <h5>Your Feeback</h5>
      <ul class="list-unstyled">
        <form action="/sms/php/formSubmit.php" method="post">
          <label style="color: #fff;" for="name">Name: </label> <input class="form-control" type="text" name="name" id="name">
          <br>
          <label style="color: #fff;" for="email">Email: </label> <input  class="form-control" type="text" name="email" id="email">
          <br>
          <label style="color: #fff;" for="feedback">FeedBack: </label> 
        <input class="form-control" type="text" name="feedback" id="feedback">
          <br>
          <input  class="btn btn-outline-info" type="submit" value="Submit">
        </form>

      </ul>
    </div>

  </div>
</div>
</footer>
        
    

    
</body>
</html>