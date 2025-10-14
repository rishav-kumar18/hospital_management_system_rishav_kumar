<?php



function fun() {
  // include('connection.php');
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
        
            
          if (isset($_POST['registerptnt'])){
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
            $remail = $_POST['remail'];
            $passwo = $_POST['rpass'];


        

            $sql = "INSERT INTO patient (DbName, DbAddress, DbPhone, DbGender, DBDate, DbBlood, DbUid, DbEmail, DbPassword) VALUES ('$name', '$address', '$phone', '$gender', '$dob', '$grp', '$aadhar', '$remail', '$passwo')";  
            echo $sql;
            // $conn =new mysqli($server,$user,$password,$data);
            if(mysqli_query($conn, $sql)){  

                echo "<script>alert('Patient Registered')</script>";
                // header("admin.php");
                echo "<script>window.location.replace('../Login.php');</script>";


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
  