<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="login.css">
    <style>
        .rishav {
            color: red;
        }

        .error {
            color: red;
        }
    </style>
   
</head>

<body>

 


    <div class="firsthalf">
        <div class="bluebox">
            <form action="" name="loginform" method="post" name="search-theme-form" id="search-theme-form" onsubmit="return validate2()">
                <h2>
                    Tata Motors Hospital
                </h2>
                <div class="formdesign" id="ruser">
                    <label for="user">UserType</label><br>
                    <select name="user" id="user">
                        <option value="none" selected disabled hidden>Select an Option</option>
                        <option value="Admin">Admin</option>
                        <option value="Doctor">Doctor</option>
                        <option value="Patient">Patient</option>
                    </select>
                    <div class="error">*</div>
                </div>
                <div class="formdesign">
                    Email:<br><input type="text" id="loginemail" name="loginemail" placeholder="Enter the Email">
                </div>
                <div class="formdesign">
                    Password:<br><input type="password" id="loginpass" name="loginpass" placeholder="Password"
                        autocomplete="off">
                </div>
                <div class="formdesign rishav" id="verry">
                    Invalid Email Or Password !
                </div>
                <div class="formdesign special1">
                    <button type="submit" name="login" >LOGIN</button>
                </div>
                <!-- onclick="return chgAction()" -->
            </form>
        </div>

    </div>





    <div class="secondhalf">
        <div class="whitebox">
            <form action="Data_Insert/Login_reg_patient.php" name="registerform" onsubmit="return validate()" method="post">
                <h2 style="text-align: center; margin-bottom: 4vh; margin-top: 2vh;">PATIENT REGISTRATION</h2>
                <div class="two">
                    <div class="fvedy le" id="rname">
                        Name:<br><input type="text" name="rname" ><br>
                        <div class="error">*</div>
                    </div>
                    <div class="fvedy ri" id="radd">
                        Address:<br><input type="text" name="radd" >
                        <br>
                        <div class="error">*</div>
                    </div>
                </div>
                <div class="two">
                    <div class="fvedy le" id="rphone">
                        Phone Number:<br><input type="number" name="rphone" >
                        <br>
                        <div class="error">*</div>

                    </div>
                    <div class="fvedy ri" id="gen">
                        <label for="gen">Gender:</label><br>
                        <select name="gen" id="rgen">
                            <option value="none" selected disabled hidden>Select an Option</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Other">Other</option>
                        </select>
                        <br>
                        <div class="error">*</div>

                    </div>
                </div>
                <div class="two">
                    <div class="fvedy" id="rdob">
                        Date Of Birth:<br><input type="date" name="rdob" id="dob" >
                        <br>
                        <div class="error">*</div>

                    </div>
                    <div class="fvedy" id="bgrp">
                        <label for="bgrp">Blood Group:</label><br>
                        <select name="bgrp" id="rbgrp">
                            <option value="none" selected disabled hidden>Select an Option</option>
                            <option value="O+">O+</option>
                            <option value="O-">O-</option>
                            <option value="A+">A+</option>
                            <option value="A-">A-</option>
                            <option value="B+">B+</option>
                            <option value="B-">B-</option>
                            <option value="AB+">AB+</option>
                            <option value="AB-">AB-</option>

                        </select>
                        <br>
                        <div class="error">*</div>

                    </div>
                </div>
                <div class="two">
                    <div class="fvedy le" id="raadhar">
                        UID (Aadhar Card Number):<br><input type="number" name="raadhar" >
                        <br>
                        <div class="error">*</div>

                    </div>
                    <div class="fvedy ri" id="remail">
                        Email:<br><input type="text" name="remail" >
                        <br>
                        <div class="error">*</div>

                    </div>
                </div>
                <div class="two">
                    <div class="fvedy le" id="rpass">
                        Password:<br><input type="password" name="rpass">
                        <br>
                        <div class="error">`</div>

                    </div>
                    <div class="fvedy ri" id="rcpass">
                        Confirm Password:<br><input type="password" name="rcpass">
                        <br>
                        <div class="error">*</div>

                    </div>
                </div>
                <div class="two" style="display: flex;justify-content: center;">
                    <div class="fvedy">
                        <button type="submit" name="registerptnt">REGISTER</button>
                    </div>

                </div>

            </form>
        </div>
    </div>



</body>


<script src="login.js"></script>



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
        
          if (isset($_POST['login'])){
            $email = $_POST['loginemail'];
            $pass = $_POST['loginpass'];
            $user = $_POST['user'];

            if ($user == "Admin"){

            $query = "SELECT * from admin where email = '$email' && password = '$pass' ;";
            $result = mysqli_query($conn,$query);
            $count = mysqli_num_rows($result);
            if($count == 1){
                echo "<script>window.location.replace('admin.php');</script>";
                // exit();
            }

          }
            if ($user == "Doctor"){
            

            $query = "SELECT * from doctor where DbEmail = '$email' && DbPassword = '$pass' ;";
            $result = mysqli_query($conn,$query);
            $count = mysqli_num_rows($result);
            if($count == 1){
                echo "<script>window.location.replace('doctor.php');</script>";
                // exit();
            }

          }
            if ($user == "Patient"){
            
                
               
                $query = "SELECT * FROM patient WHERE DbEmail LIKE '$email' AND DbPassword LIKE '$pass';";
            $result = mysqli_query($conn,$query);
            $count = mysqli_num_rows($result);

            if($count > 0){



                echo "<script>window.location.replace('patient.php');</script>";

                
               
            }

          }


          if ($count !=1){

           echo "<script> console.log('$email');</script>";
           echo "<script> console.log('$user');</script>";
           echo "<script> console.log('$pass');</script>";
            
            

            ?>


            <script type="text/javascript">
                document.getElementById('verry').style.visibility = "visible";

               
                
            </script>

            <?php
          }

          }
  
        }
  }


  // This @ will supress all the error and warnings
@fun();
  
  ?>
  </html>





