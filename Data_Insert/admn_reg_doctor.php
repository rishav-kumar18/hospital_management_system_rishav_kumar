<?php



function fun() {
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
        
            
          if (isset($_POST['doctorreg'])){
            // $email = $_POST['loginemail'];
            // $pass = $_POST['loginpass'];
            // $user = $_POST['user'];
            // echo "success";

            $name = $_POST['rname'];
            $address = $_POST['radd'];
            $phone = $_POST['rphone'];
            $gender = $_POST['gen'];
            $dob = $_POST['rdob'];
            $grp = $_POST['bgrp'];
            $aadhar = $_POST['raadhar'];
            $doj = $_POST['join'];
            $speci = $_POST['spec'];
            $remail = $_POST['remail'];
            $passwo = $_POST['rpass'];


        

            $sql = "INSERT INTO doctor (DbName, DbAddress, DbPhone, DbGender, DBDate, DbBlood, DbUid, DbSpec, DbJoin, DbEmail, DbPassword) VALUES ('$name', '$address', '$phone', '$gender', '$dob', '$grp', '$aadhar','$speci','$doj', '$remail', '$passwo')";  

    
            if(mysqli_query($conn, $sql)){  

                echo "<script>alert('Doctor Registered')</script>";
                // header("admin.php");
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
  