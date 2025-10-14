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
        
            
          if (isset($_POST['admnreg'])){
            // $email = $_POST['loginemail'];
            // $pass = $_POST['loginpass'];
            // $user = $_POST['user'];
            // echo "success";

            $name = $_POST['rname2'];
            $address = $_POST['radd2'];
            $phone = $_POST['rphone2'];
            $gender = $_POST['gen2'];
            $dob = $_POST['rdob2'];
            $grp = $_POST['bgrp2'];
            $aadhar = $_POST['raadhar2'];
            $remail = $_POST['remail2'];
            $passwo = $_POST['rpass2'];


        

            $sql = "INSERT INTO patient (DbName, DbAddress, DbPhone, DbGender, DBDate, DbBlood, DbUid, DbEmail, DbPassword) VALUES ('$name', '$address', '$phone', '$gender', '$dob', '$grp', '$aadhar', '$remail', '$passwo')";  

            if(mysqli_query($conn, $sql)){  

                echo "<script>alert('Patient Registered')</script>";
                // header("admin.php");
                echo "<script>window.location.replace('../doctor.php');</script>";


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
  