<?php
$con = mysqli_connect('localhost','root','','database');
$res = mysqli_query($con,"SELECT * FROM admin;");
$res2 = mysqli_query($con,"SELECT * FROM doctor;");
$res3 = mysqli_query($con,"SELECT * FROM patient;");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <link rel="stylesheet" href="test.css">
    <style>
        /* Set height of body and the document to 100% to enable "full page tabs" */
        body,
        html {
            height: 100%;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial;
            background: linear-gradient(45deg, #8395a7, #e5e6e6);
        }

        /* Style tab links */
        .tablink {
            background-color: #555;
            color: white;
            float: left;
            border: none;
            outline: none;
            cursor: pointer;
            height: 8vh;
            /* padding: 14px 16px; */
            font-size: 25px;
            font-weight: 700;
            width: 50%;
        }

        .tablink:hover {
            background-color: #777;
            color: white;
        }

        /* Style the tab content (and add height:100% for full page content) */
        .tabcontent {
            /* color: white; */
            display: none;
            height: 90vh;
        }

        #Register {
            background-color: linear-gradient(45deg, #8395a7, #e5e6e6);
        }

        #Admin {
            background-color: aliceblue;
        }

        #Doctor {
            background-color: aliceblue;
        }

        #About {
            background-color: linear-gradient(45deg, #8395a7, #e5e6e6);
        }

        .containe {
            margin-top: 1.5vh;
            margin-left: 2.5vw;
            width: 95vw;
        }
        .contai{
            font-size:16px;
        }
    </style>

    <style>
        .modal-window {
            position: fixed;
            background-color: rgba(255, 255, 255, 0.25);
            backdrop-filter: blur(8px);
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 999;
            visibility: hidden;
            opacity: 0;
            pointer-events: none;
            transition: all 0.3s;

            &:target {
                visibility: visible;
                opacity: 1;
                pointer-events: auto;
            }

            &>div {
                width: 65vw;
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                padding: 2em;

                background: aliceblue;
            
            }

            header {
                font-weight: bold;
            }

            h1 {
                font-size: 150%;
                margin: 0 0 15px;
            }
        }

        .modal-close {
            color: #aaa;
            line-height: 50px;
            font-size: 80%;
            position: absolute;
            right: 0;
            text-align: center;
            top: 0;
            width: 70px;
            text-decoration: none;

            &:hover {
                color: black;
            }
        }

        html,
        body {
            height: 100%;
        }

        html {
            font-size: 18px;
            line-height: 1.4;
        }



        a {
            color: inherit;
            text-decoration: none;
        }

        .container {
            display: flex;
            justify-content: space-evenly;
            align-items: center;
            height: 70vh;
        }

        .modal-window {
            &>div {
                border-radius: 1rem;
            }
        }

        .modal-window div:not(:last-of-type) {
            margin-bottom: 15px;
        }





        .btni {
            background-color: aliceblue;
            padding: 1em 1.5em;
            border-radius: 0.0rem;
            text-decoration: none;

            i {
                padding-right: 0.3em;
            }
        }

        .conta {
            margin-left: 7vw;
            width: 50vw;
        }

        .error {
            color: red;
        }
    </style>
</head>

<body>
    <div class="heading"
        style=" font-weight: 700;font-size:xx-large;padding-top: 2vh; padding-left:5vw ;padding-right:3vw ; display:flex; justify-content: space-between; color: aliceblue; ">
        <span>DOCTOR PANEL</span><button class="btn btn-primary" onclick="window.location.replace('Login.php')">LOGOUT</button>
    </div>
    <div class="containe">
        <button class="tablink" onclick="openPage('About', this, 'aliceblue','black')" id="defaultOpen">Patients List</button>
        <button class="tablink" onclick="openPage('Register', this, 'aliceblue','black')">Register</button>




        <div id="Register" class="tabcontent">
            <div class="container">

                <div class="interior">
                    <a class="btni" href="#open-modal3"> For Patient</a>
                </div>
            </div>


            <div id="open-modal3" class="modal-window">
                <div>
                    <a href="#" title="Close" class="modal-close">Close</a>


                    <div class="conta">
                        <form action="Data_Insert/doctor_reg_patient.php" name="registerformm"
                            onsubmit="return validate2()" method="post" autocomplete="off">

                            <h2 style="text-align: center; margin-bottom: 4vh; margin-top: 2vh;">REGISTRATION FOR
                                PATIENT
                            </h2>
                            <div class="contain">
                                <div class="two">
                                    <div class="fvedy le" id="rname2">
                                        Name:<br><input type="text" name="rname2"><br>
                                        <div class="error">*</div>
                                    </div>
                                    <div class="fvedy le" id="radd2">
                                        Address:<br><input type="text" name="radd2">
                                        <br>
                                        <div class="error">*</div>
                                    </div>
                                    <div class="fvedy le" id="rphone2">
                                        Phone Number:<br><input type="number" name="rphone2">
                                        <br>
                                        <div class="error">*</div>

                                    </div>
                                </div>
                                <div class="two">

                                    <div class="fvedy le" id="gen2">
                                        <label for="gen2">Gender:</label><br>
                                        <select name="gen2" id="rgen2">
                                            <option value="none" selected disabled hidden>Select an Option</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                            <option value="Other">Other</option>
                                        </select>
                                        <br>
                                        <div class="error">*</div>

                                    </div>
                                    <div class="fvedy ledate" id="rdob2">
                                        Date Of Birth:<br><input type="date" name="rdob2" id="dob2">
                                        <br>
                                        <div class="error">*</div>

                                    </div>
                                    <div class="fvedy le" id="bgrp2">
                                        <label for="bgrp2">Blood Group:</label><br>
                                        <select name="bgrp2" id="rbgrp2">
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

                                    <div class="fvedy le" id="raadhar2">
                                        UID (Aadhar Card Number):<br><input type="number" name="raadhar2">
                                        <br>
                                        <div class="error">*</div>

                                    </div>
                                    <div class="fvedy le" id="remail2">
                                        Email:<br><input type="text" name="remail2">
                                        <br>
                                        <div class="error">*</div>

                                    </div>
                                    <div class="fvedy le" id="rpass2">
                                        Password:<br><input type="password" name="rpass2">
                                        <br>
                                        <div class="error">*</div>

                                    </div>
                                </div>
                                <div class="two">


                                    <div class="fvedy le" id="rcpass2">
                                        Confirm Password:<br><input type="password" name="rcpass2">
                                        <br>
                                        <div class="error">*</div>

                                    </div>
                                    <div class="fvedy" style="margin-top:3vh;">
                                        <button type="submit" name="admnreg">REGISTER</button>
                                    </div>

                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>





        <div id="About" class="tabcontent">
            <div class="contai" style="padding:10vh 5vh;">
                <table id="Tabla" class="table" style="border:1px solid grey;">
                    <thead class="table-primary">
                        <tr>
                            <th>S.No.</th>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Phone No.</th>
                            <th>Gender</th>
                            <th>Date Of Birth</th>
                            <th>Blood Group</th>
                            <th>UID</th>
                            <th>Email</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $t=0;
                    while($row = mysqli_fetch_assoc($res3)){
                        $t=$t+1;
                    ?>
                        <tr>
                            <td>
                                <?php echo $t; ?>
                            </td>
                            <td>
                                <?php echo $row['DbName'] ?>
                            </td>
                            <td>
                                <?php echo $row['DbAddress']  ?>
                            </td>
                            <td>
                                <?php echo $row['DbPhone']  ?>
                            </td>
                            <td>
                                <?php echo $row['DbGender']  ?>
                            </td>
                            <td>
                                <?php echo $row['DBDate']  ?>
                            </td>
                            <td>
                                <?php echo $row['DbBlood']  ?>
                            </td>
                            <td>
                                <?php echo $row['DbUid']  ?>
                            </td>
                            <td>
                                <?php echo $row['DbEmail']  ?>
                            </td>
                        </tr>
                        <?php
                   }
                   ?>
                   <tr>
                            <td>2</td>
                            <td>patient1</td>
                            <td>Ranchi</td>
                            <td>1234567890</td>
                            <td>Male</td>
                            <td>3-6-2002</td>
                            <td>O+</td>
                            <td>111122223333</td>
                            <td>patient1@gmail.com</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>patient2</td>
                            <td>Tata</td>
                            <td>2345678901</td>
                            <td>Male</td>
                            <td>13-7-2004</td>
                            <td>A+</td>
                            <td>111122224444</td>
                            <td>patient2@gmail.com</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>patient3</td>
                            <td>Jamshedpur</td>
                            <td>3456789012</td>
                            <td>Female</td>
                            <td>12-2-2005</td>
                            <td>B+</td>
                            <td>111122225555</td>
                            <td>patient3@gmail.com</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>patient4</td>
                            <td>Delhi</td>
                            <td>4567890123</td>
                            <td>Male</td>
                            <td>17-1-2000</td>
                            <td>AB+</td>
                            <td>444422223333</td>
                            <td>patient4@gmail.com</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>patient5</td>
                            <td>Odisha</td>
                            <td>567891234</td>
                            <td>Female</td>
                            <td>8-10-2001</td>
                            <td>O+</td>
                            <td>111122226666</td>
                            <td>patient5@gmail.com</td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>patient6</td>
                            <td>Ranchi</td>
                            <td>6789012345</td>
                            <td>Male</td>
                            <td>31-10-1999</td>
                            <td>AB+</td>
                            <td>999922223333</td>
                            <td>patient6@gmail.com</td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>patient7</td>
                            <td>Pune</td>
                            <td>7890123456</td>
                            <td>Male</td>
                            <td>6-3-2003</td>
                            <td>O-</td>
                            <td>432122223333</td>
                            <td>patient7@gmail.com</td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>patient8</td>
                            <td>Telco</td>
                            <td>8901234567</td>
                            <td>Female</td>
                            <td>21-8-2002</td>
                            <td>A+</td>
                            <td>928322223333</td>
                            <td>patient8@gmail.com</td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>patient9</td>
                            <td>Delhi</td>
                            <td>9012345678</td>
                            <td>Male</td>
                            <td>1-6-2008</td>
                            <td>O+</td>
                            <td>657522223333</td>
                            <td>patient9@gmail.com</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
   
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>

<script>


    let table = new DataTable('#Tabla');


</script>


<script src="admin.js"></script>

<script>
    function openPage(pageName, elmnt, color, txte) {
        // Hide all elements with class="tabcontent" by default */
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }

        // Remove the background color of all tablinks/buttons
        tablinks = document.getElementsByClassName("tablink");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].style.backgroundColor = "";
            tablinks[i].style.color = "";
        }

        // Show the specific tab content
        document.getElementById(pageName).style.display = "block";

        // Add the specific color to the button used to open the tab content
        elmnt.style.backgroundColor = color;
        elmnt.style.color = txte;
    }

    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
</script>



</html>