    function seterror(id, perror) {
        element = document.getElementById(id);
        element.getElementsByClassName('error')[0].innerHTML = perror;
        element.getElementsByClassName('error')[0].style.visibility = "visible";
    }

    function freerror(id) {
        element = document.getElementById(id);
        if (element.getElementsByClassName('error')[0].style.visibility === "visible")
            element.getElementsByClassName('error')[0].style.visibility = "hidden";
    }

    function validate() {

        var returnval = true;
        //       NAME 
        var name = document.forms['registerform']["rname"].value;
        if (name.length === 0) {
            seterror("rname", "Enter your name please !");
            returnval = false;
        } else {
            freerror("rname");
        }

        // ADDRESS 

        var add = document.forms['registerform']["radd"].value;

        if (add.length === 0) {
            seterror("radd", "Address can't be empty.");
            returnval = false;
        } else {
            freerror("radd");
        }

        // Phone Number

        var phone = document.forms['registerform']["rphone"].value;

        if (phone.length === 0) {
            seterror("rphone", "Phone Number can't be empty.");
            returnval = false;
        } else {
            freerror("rphone");
            if (phone.length > 10) {
                seterror("rphone", "Phone Number too long");
                returnval = false;
            } else {
                freerror("rphone");
                if (phone.length === 10) {
                    ph = phone.charAt(0);
                    if (ph === '0' || ph === '1' || ph === '2' || ph === '3' || ph === '4' || ph === '5') {
                        seterror("rphone", "Enter valid phone number starting <br> with digit 6,7,8 or 9");
                        returnval = false;
                    } else {
                        freerror("rphone");
                    }
                } else {
                    seterror("rphone", "Phone Number Too Short..");
                    returnval = false;
                }
            }

        }


        // GENDER
        var gender = document.getElementById('rgen').selectedOptions[0].value;
        if (gender === "none") {
            seterror('gen', "Please select the gender");
            returnval = false;
        } else {
            freerror('gen')
        }


        // DATE OF BIRTH

        var selectedDate = document.getElementById('dob').value;
        if (selectedDate == "") { // use == instead of = here. It will check condition
            seterror('rdob', "Please enter DOB");
            returnval = false
        } else {
            freerror('rdob')
        }


        //BLOOD GRP
        var bgrp = document.getElementById('rbgrp').selectedOptions[0].value;
        if (bgrp === "none") {
            seterror('bgrp', "Please select Blood Group !");
            returnval = false;
        } else {
            freerror('bgrp')
        }



        //UID

        var uid = document.forms['registerform']["raadhar"].value;

        if (uid.length === 0) {
            seterror("raadhar", "Enter Your 12-digit UID Number");
            returnval = false;
        } else {
            freerror("raadhar");
            if (uid.length > 12) {
                seterror("raadhar", "UID Number is Too Long ");
                returnval = false;
            } else {
                freerror("raadhar");
                if (uid.length < 12) {
                    seterror("raadhar", "UID Number is Too Short");
                    returnval = false;
                } else {
                    freerror("raadhar");
                }
            }

        }

        // email


        var emaill = document.forms['registerform']["remail"].value;
        if (emaill.length === 0) {
            seterror("remail", "Email cannot be empty");
            returnval = false;
        } else {
            freerror("remail");
            if (emaill.includes("@") && emaill.includes(".")) {
                freerror("remail");
            } else {
                seterror("remail", "Email should contain @ and (.)dot");
                returnval = false;
            }
        }


        //Password

        var pass = document.forms['registerform']["rpass"].value;
        if (pass.length > 0) {
            freerror("rpass");
            var pattern = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*\\d)(?=.*[-+_!@#$%^&*.,?]).+$");

            if (pattern.test(pass)) {
                freerror("rpass");
            } else {
                seterror('rpass', "Password to contain Uppercase,<br>alphanumeric & special charecter");
                returnval = false;
            }
        } else {
            seterror('rpass', "Please enter the Password");
            returnval = false;
        }

        //Confirm password
        var cpass = document.forms['registerform']["rcpass"].value;
        if (cpass.length > 0) {
            freerror("rcpass");
            if (pass != cpass) {
                seterror('rcpass', "Password and Confirm Password<br> to be same");
                returnval = false;
            } else {
                freerror("rcpass");
            }
        } else {
            if (pass.length > 0) {
                seterror('rcpass', "Please enter Confirm Password");
                returnval = false;
            } else {
                freerror('rcpass');
            }
        }


        return returnval;
    }


    // LOGIN

    function validate2() {
        var returnval = true;
        var loguser = document.getElementById('user').selectedOptions[0].value;
        if (loguser === "none") {
            seterror('ruser', "Please select the UserType");
            returnval = false;
        } else {
            freerror('ruser')
        }
        console.log(loguser);


        return returnval;
    }

    //set action