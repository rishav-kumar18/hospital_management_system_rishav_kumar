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

    var returnval2 = true;
    //       NAME
    var name = document.forms['registerform']["rname"].value;
    if (name.length === 0) {
        seterror("rname", "Enter your name please !");
        returnval2 = false;
    } else {
        freerror("rname");
    }

    // ADDRESS 

    var add = document.forms['registerform']["radd"].value;

    if (add.length === 0) {
        seterror("radd", "Address can't be empty.");
        returnval2 = false;
    } else {
        freerror("radd");
    }

    // Phone Number

    var phone = document.forms['registerform']["rphone"].value;

    if (phone.length === 0) {
        seterror("rphone", "Phone Number can't be empty.");
        returnval2 = false;
    } else {
        freerror("rphone");
        if (phone.length > 10) {
            seterror("rphone", "Phone Number too long");
            returnval2 = false;
        } else {
            freerror("rphone");
            if (phone.length === 10) {
                ph = phone.charAt(0);
                if (ph === '0' || ph === '1' || ph === '2' || ph === '3' || ph === '4' || ph === '5') {
                    seterror("rphone", "Enter valid phone number <br> starting between digits 6-9");
                    returnval2 = false;
                } else {
                    freerror("rphone");
                }
            } else {
                seterror("rphone", "Phone Number Too Short..");
                returnval2 = false;
            }
        }

    }


    // GENDER
    var gender = document.getElementById('rgen').selectedOptions[0].value;
    if (gender === "none") {
        seterror('gen', "Please select the gender");
        returnval2 = false;
    } else {
        freerror('gen')
    }


    // DATE OF BIRTH

    var selectedDate = document.getElementById('dob').value;
    if (selectedDate == "") {  // use == instead of = here. It will check condition
        seterror('rdob',"Please enter DOB");
        returnval2=false
    } else {
        freerror('rdob')
    }


    //BLOOD GRP
    var bgrp = document.getElementById('rbgrp').selectedOptions[0].value;
    if (bgrp === "none") {
        seterror('bgrp', "Please select Blood Group !");
        returnval2 = false;
    } else {
        freerror('bgrp')
    }


    // JOINING DATE

    var selectedDate = document.getElementById('dob1').value;
    if (selectedDate == "") {  // use == instead of = here. It will check condition
        seterror('rdob1',"Please enter Joining Date ");
        returnval2=false
    } else {
        freerror('rdob1')
    }


    //SPECIALIZATION
    var bgrp = document.getElementById('rbgrp1').selectedOptions[0].value;
    if (bgrp === "none") {
        seterror('bgrp1', "Please select Specialization !");
        returnval2 = false;
    } else {
        freerror('bgrp1')
    }

    //UID

    var uid = document.forms['registerform']["raadhar"].value;

    if (uid.length === 0) {
        seterror("raadhar", "Enter Your 12-digit UID Number");
        returnval2 = false;
    } else {
        freerror("raadhar");
        if (uid.length > 12) {
            seterror("raadhar", "UID Number is Too Long ");
            returnval2 = false;
        } else {
            freerror("raadhar");
            if (uid.length < 12) {
                seterror("raadhar", "UID Number is Too Short");
                returnval2 = false;
            } else {
                freerror("raadhar");
            }
        }

    }

    // email


    var emaill = document.forms['registerform']["remail"].value;
    if (emaill.length === 0) {
        seterror("remail", "Email cannot be empty");
        returnval2 = false;
    } else {
        freerror("remail");
        if (emaill.includes("@") && emaill.includes(".")) {
            freerror("remail");
        } else {
            seterror("remail", "Email should contain @ and (.)dot");
            returnval2 = false;
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
            returnval2 = false;
        }
    } else {
        seterror('rpass', "Please enter the Password");
        returnval2 = false;
    }

    //Confirm password
    var cpass = document.forms['registerform']["rcpass"].value;
    if (cpass.length > 0) {
        freerror("rcpass");
        if (pass != cpass) {
            seterror('rcpass', "Password and Confirm Password<br> to be same");
            returnval2 = false;
        } else {
            freerror("rcpass");
        }
    } else {
        if (pass.length>0){
        seterror('rcpass', "Please enter Confirm Password");
        returnval2 = false;}
        else{
            freerror('rcpass');
        }
    }



    
    
    
    
    
    return returnval2;
}



// second function






function validate2() {

    var returnval = true;
    //       NAME
    var name = document.forms['registerformm']["rname2"].value;
    if (name.length === 0) {
        seterror("rname2", "Enter your name please !");
        returnval = false;
    } else {
        freerror("rname2");
    }

    // // // ADDRESS 

    var add = document.forms['registerformm']["radd2"].value;

    if (add.length === 0) {
        seterror("radd2", "Address can't be empty.");
        returnval = false;
    } else {
        freerror("radd2");
    }

    // // // Phone Number

    var phone = document.forms['registerformm']["rphone2"].value;

    if (phone.length === 0) {
        seterror("rphone2", "Phone Number can't be empty.");
        returnval = false;
    } else {
        freerror("rphone2");
        if (phone.length > 10) {
            seterror("rphone2", "Phone Number too long");
            returnval = false;
        } else {
            freerror("rphone2");
            if (phone.length === 10) {
                ph = phone.charAt(0);
                if (ph === '0' || ph === '1' || ph === '2' || ph === '3' || ph === '4' || ph === '5') {
                    seterror("rphone2", "Enter valid phone number <br> starting between digits 6-9");
                    returnval = false;
                } else {
                    freerror("rphone2");
                }
            } else {
                seterror("rphone2", "Phone Number Too Short..");
                returnval = false;
            }
        }

    }


    // // GENDER
    var gender = document.getElementById('rgen2').selectedOptions[0].value;
    if (gender === "none") {
        seterror('gen2', "Please select the gender");
        returnval = false;
    } else {
        freerror('gen2')
    }


    // // DATE OF BIRTH

    var selectedDate = document.getElementById('dob2').value;
    if (selectedDate == "") {  // use == instead of = here. It will check condition
        seterror('rdob2',"Please enter DOB");
        returnval=false
    } else {
        freerror('rdob2')
    }


    // //BLOOD GRP
    var bgrp = document.getElementById('rbgrp2').selectedOptions[0].value;
    if (bgrp === "none") {
        seterror('bgrp2', "Please select Blood Group !");
        returnval = false;
    } else {
        freerror('bgrp2')
    }


 
    // //UID

    var uid = document.forms['registerformm']["raadhar2"].value;

    if (uid.length === 0) {
        seterror("raadhar2", "Enter Your 12-digit UID Number");
        returnval = false;
    } else {
        freerror("raadhar2");
        if (uid.length > 12) {
            seterror("raadhar2", "UID Number is Too Long ");
            returnval = false;
        } else {
            freerror("raadhar2");
            if (uid.length < 12) {
                seterror("raadhar2", "UID Number is Too Short");
                returnval = false;
            } else {
                freerror("raadhar2");
            }
        }

    }

    // // email


    var emaill = document.forms['registerformm']["remail2"].value;
    if (emaill.length === 0) {
        seterror("remail2", "Email cannot be empty");
        returnval = false;
    } else {
        freerror("remail2");
        if (emaill.includes("@") && emaill.includes(".")) {
            freerror("remail2");
        } else {
            seterror("remail2", "Email should contain @ and (.)dot");
            returnval = false;
        }
    }


    // //Password

    var pass = document.forms['registerformm']["rpass2"].value;
    if (pass.length > 0) {
        freerror("rpass2");
        var pattern = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*\\d)(?=.*[-+_!@#$%^&*.,?]).+$");

        if (pattern.test(pass)) {
            freerror("rpass2");
        } else {
            seterror('rpass2', "Password to contain Uppercase,<br>alphanumeric & special charecter");
            returnval = false;
        }
    } else {
        seterror('rpass2', "Please enter the Password");
        returnval = false;
    }

    // Confirm password
    var cpass = document.forms['registerformm']["rcpass2"].value;
    if (cpass.length > 0) {
        freerror("rcpass2");
        if (pass != cpass) {
            seterror('rcpass2', "Password and Confirm Password<br> to be same");
            returnval = false;
        } else {
            freerror("rcpass2");
        }
    } else {
        if (pass.length>0){
        seterror('rcpass2', "Please enter Confirm Password");
        returnval = false;}
        else{
            freerror('rcpass2');
        }
    }
    
    return returnval;
}




// function 3



function validate3() {

    var returnval3 = true;

    var emaill = document.forms['registeradmin']["emailadmin"].value;
    if (emaill.length === 0) {
        seterror("emailadmin", "Email cannot be empty");
        returnval3 = false;
    } else {
        freerror("emailadmin");
        if (emaill.includes("@") && emaill.includes(".")) {
            freerror("emailadmin");
        } else {
            seterror("emailadmin", "Email should contain @ and (.)dot");
            returnval3 = false;
        }
    }

   
    var pass = document.forms['registeradmin']["adminpass"].value;
    if (pass.length > 0) {
        freerror("adminpass");
        var pattern = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*\\d)(?=.*[-+_!@#$%^&*.,?]).+$");

        if (pattern.test(pass)) {
            freerror("adminpass");
        } else {
            seterror('adminpass', "Password to contain Uppercase,<br>alphanumeric & special charecter");
            returnval3 = false;
        }
    } else {
        seterror('adminpass', "Please enter the Password");
        returnval3 = false;
    }

    // CP 

    var cpass = document.forms['registeradmin']["adminpassC"].value;
    if (cpass.length > 0) {
        freerror("adminpassC");
        if (pass != cpass) {
            seterror('adminpassC', "Password and Confirm Password<br> to be same");
            returnval3 = false;
        } else {
            freerror("adminpassC");
        }
    } else {
        if (pass.length>0){
        seterror('adminpassC', "Please enter Confirm Password");
        returnval3 = false;}
        else{
            freerror('adminpassC');
        }
    }

    return returnval3;

}