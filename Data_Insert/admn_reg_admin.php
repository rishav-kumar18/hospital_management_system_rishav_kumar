<?php



function fun() {
  include('connection.php');
    $servername = "localhost";
    $username = "root"; 
    $password = "";
    $db = "database";
       // Create connection
    $conn = new mysqli($servername, $username, $password,$db);
     
  // Check connection
    if ($conn->connect_error) {
          echo "Failed";
        }else{
        
            
          if (isset($_POST['regforadmin'])){
            

            $name = $_POST['emailadmin'];
            $passwo = $_POST['adminpass'];


        

            $sql = "INSERT INTO admin (email, password) VALUES ('$name', '$passwo')";  

            if(mysqli_query($conn, $sql)){  

                echo "<script>alert('Admin Registered')</script>";
               
                echo "<script>window.location.replace('../admin.php');</script>";


            }else{  

                echo "Could not insert record: ". mysqli_error($conn);  

            }  

            mysqli_close($conn);

          

          }
  
        }
  }


  // This @ will supress all the error and warnings
@fun();
  
  ?>