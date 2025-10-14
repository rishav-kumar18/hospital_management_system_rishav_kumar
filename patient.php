<?php
$con = mysqli_connect('localhost','root','','database');
include('connection.php');
$res3 = mysqli_query($con,"SELECT * FROM patient;");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <style>
        body{
            height: 95vh;
            width: 100vw;
            background: linear-gradient(45deg, #8395a7, #e5e6e6);
            
        }
        .container{
            display: flex;
            justify-content: space-between;
            margin-top: 10px;
        }
        .contai{
            font-size:16px;
        }
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
            width: 25%;
        }

        .tablink:hover {
            background-color: #777;
            color: white;
        }
        #About {
            background-color: linear-gradient(45deg, #8395a7, #e5e6e6);
        }
        .tabcontent {
            /* color: white; */
            display: none;
            height: 90vh;
        }
    </style>
</head>
<body>
    <div class="container">
    <h1 style="color: black;">Welcome</h1>
    <button class="btn btn-primary" onclick="window.location.replace('Login.php')">LOGOUT</button></div>
    <button class="tablink" onclick="openPage('About', this, 'aliceblue','black')">Patient Profile</button>
    <div id="About" class="tabcontent">
        <div class="contai" style="padding:10vh 5vh;">
            <table id="myTabless" class="table" style="border:1px solid grey;">
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
                        $t = 0;
                        while ($row = mysqli_fetch_assoc($res3)) {
                            $t = $t + 1;
                            ?>
                            <tr>
                                <td>
                                    <?php echo $t; ?>
                                </td>
                                <td>
                                    <?php echo $row['DbName'] ?>
                                </td>
                                <td>
                                    <?php echo $row['DbAddress'] ?>
                                </td>
                                <td>
                                    <?php echo $row['DbPhone'] ?>
                                </td>
                                <td>
                                    <?php echo $row['DbGender'] ?>
                                </td>
                                <td>
                                    <?php echo $row['DBDate'] ?>
                                </td>
                                <td>
                                    <?php echo $row['DbBlood'] ?>
                                </td>
                                <td>
                                    <?php echo $row['DbUid'] ?>
                                </td>
                                <td>
                                    <?php echo $row['DbEmail'] ?>
                                </td>
                            </tr>
                            <?php
                        }
                        ?>
                    </tbody>
            </table>
        </div>
    </div>
</body>
<script>
    let tableee = new DataTable('#myTabless');

</script>
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