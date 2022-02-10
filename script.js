// Defining a function to display error message
function printError(elemId, hintMsg) {
    document.getElementById(elemId).innerHTML = hintMsg;
}

// Defining a function to validate form 
function validateForm() {
    // Retrieving the values of form elements 
    var surname = document.getElementById("surname").value;
    var middle_name = document.getElementById("middle_name").value;
    var first_name = document.getElementById("first_name").value;
    var email = document.getElementById("email").value;
    var phone_number = document.getElementById("phone_number").value;
    var address = document.getElementById("address").value;
    var dob = document.getElementById("dob").value;
    var gender = document.getElementById("gender").options[document.getElementById("gender").selectedIndex].value;
    var identification = document.getElementById("idtype").options[document.getElementById("idtype").selectedIndex].value;
    var idnumber = document.getElementById("idnumber").value;
    var issuedate = document.getElementById("issuedate").value;
    var expdate = document.getElementById("expdate").value;
    var employer = document.getElementById("employer").value;
    var eaddress = document.getElementById("eaddress").value;
    var onumber = document.getElementById("onumber").value;
    var ippisnumber = document.getElementById("ippisnumber").value;
    var bvn = document.getElementById("bvn").value;
    var nmanumber = document.getElementById("nmanumber").value;
    var govtid = document.getElementById("govtid").value;
    var passport = document.getElementById("passport").value;


    // Defining error variables with a default value
    var surnameErr = middle_nameErr = first_nameErr = emailErr = phone_numberErr = addressErr = dobErr = genderErr = identificationErr = idnumberErr =
        issuedateErr = expdateErr = employerErr = eaddressErr = onumberErr = ippisnumberErr = bvnErr = nmanumberErr = govtidErr = passportErr = true;

    // Validate surname

    if (surname == "") {
        // alert(identification);
        printError("surnameErr", "Please enter your Surname");
    }
    else if (surname.length < 4 || surname.length > 15) {
        printError("surnameErr", "Surname must be between 4 to 15 characters");
    }
    else {
        printError("surnameErr", "");
        surnameErr = false;
    }




    // Validate email address
    if (email == "") {
        printError("emailErr", "Please enter your Email Address");
    } else {
        // Regular expression for basic email validation
        var regex = /^\S+@\S+\.\S+$/;
        if (regex.test(email) === false) {
            printError("emailErr", "Please enter a valid Email Address");
        } else {
            printError("emailErr", "");
            emailErr = false;
        }
    }

    // // Validate middle_name
    if (middle_name == "") {
        printError("middle_nameErr", "Please enter your Middle Name");
    } else {
        var regex = /^[a-zA-Z\s]+$/;
        if (regex.test(middle_name) === false) {
            printError("middle_nameErr", "Please enter a valid Middle Name");
        } else {
            printError("middle_nameErr", "");
            middle_nameErr = false;
        }
    }

    // // Validate first_name
    if (first_name == "") {
        printError("first_nameErr", "Please enter your First Name");
    } else {
        var regex = /^[a-zA-Z\s]+$/;
        if (regex.test(first_name) === false) {
            printError("first_nameErr", "Please enter a valid First Name");
        } else {
            printError("first_nameErr", "");
            first_nameErr = false;
        }
    }

    // Validate address
    if (address == "") {
        printError("addressErr", "Please enter your Address");
    } else {
        printError("addressErr", "");
        addressErr = false;
    }

    // Validate mobile number
    if (phone_number == "") {
        printError("phone_numberErr", "Please enter your Phone Number");
    } else {
        var regex = /^(?:\d{2}([-.])\d{3}\1\d{3}\1\d{3}|\d{11})$/;
        if (regex.test(phone_number) === false) {
            printError("phone_numberErr", "Please enter a valid 10 digit Phone Number");
        } else {
            printError("phone_numberErr", "");
            phone_numberErr = false;
        }
    }

    // Validate dob
    if (dob == "") {
        printError("dobErr", "Please enter your Date of Birth");
    } else {
        printError("dobErr", "");
        dobErr = false;
    }

    // Validate gender
    if (gender == "") {
        printError("genderErr", "Please select a Gender from the list");
    } else {
        printError("genderErr", "");
        genderErr = false;
    }

    // Validate identification
    if (identification == "") {
        printError("identificationErr", "Please select a Means of Identity from the list");
    } else {
        printError("identificationErr", "");
        identificationErr = false;
    }

    // Validate idnumber
    if (idnumber == "") {
        printError("idnumberErr", "Please enter your Identification Number");
    } else {
        printError("idnumberErr", "");
        idnumberErr = false;
    }


    // Validate issuedate
    if (issuedate == "" && (identification == "voterscard" || identification == "nin")) {
        issuedate = 0000 - 00 - 00;
    } else if (issuedate == "") {
        printError("issuedateErr", "Please enter your ID Issued Date");
    } else {
        printError("issuedateErr", "");
        issuedateErr = false;
    }

    //     // Validate expdate
    if (expdate == "" && (identification == "voterscard" || identification == "nin")) {
        expdate = 9999 - 99 - 99;
    } else if (expdate == "") {
        printError("expdateErr", "Please enter your ID Expiry Date");
    } else if (expdate === issuedate || expdate < issuedate) {
        printError("expdateErr", "Invaild Dates");
    } else {
        printError("expdateErr", "");
        expdateErr = false;
    }

    // Validate employer

    if (employer == "") {

        printError("employerErr", "Please enter your Employer Name");
    }
    else if (employer.length < 4) {
        printError("employerErr", "Invalid Employer Name, Name too short");
    }
    else {
        printError("employerErr", "");
        employerErr = false;
    }

    // Validate eaddress
    if (eaddress == "") {
        printError("eaddressErr", "Please enter your Employer's Address");
    } else {
        printError("eaddressErr", "");
        eaddressErr = false;
    }

    // Validate onumber
    if (onumber == "") {
        printError("onumberErr", "Please enter your Oracle Number");
    } else {
        printError("onumberErr", "");
        onumberErr = false;
    }

    // Validate ippisnumber
    if (ippisnumber == "") {
        printError("ippisnumberErr", "Please enter your IPPIS Number");
    } else {
        printError("ippisnumberErr", "");
        ippisnumberErr = false;
    }

    // Validate bvn
    if (bvn == "") {
        printError("bvnErr", "Please enter your Bank Verification Number");
    } else {
        printError("bvnErr", "");
        bvnErr = false;
    }

    // Validate nmanumber
    if (nmanumber == "") {
        printError("nmanumberErr", "Please enter your NMA Number");
    } else {
        printError("nmanumberErr", "");
        nmanumberErr = false;
    }


    // Validate govtid   

    if (govtid == "") {
        printError("govtidErr", "Please upload your Government Issued ID");

    } else {
        printError("govtidErr", "");
        govtidErr = false;
    }

    // Validate passport
    // var Extention = passport.substring(passport.lastIndexOf('.') + 1).toLowerCase();

    if (passport == "") {
        printError("passportErr", "Please upload your Passport");

    }
    // else if (Extention != "jpeg" || Extention != "jpg" || Extention != "png") {
    //     printError("passportErr", "Image can only be of .jpeg/.jpg/.png Extention");
    // } 
    else {
        printError("passportErr", "");
        passportErr = false;
    }


    // Prevent the form from being submitted if there are any errors

    if ((surnameErr || middle_nameErr || first_nameErr || emailErr || phone_numberErr || addressErr || dobErr || genderErr || identificationErr || idnumberErr ||
        issuedateErr || expdateErr || employerErr || eaddressErr || onumberErr || ippisnumberErr || bvnErr || nmanumberErr || govtidErr || passportErr) == true) {
        return false;
    }
    // document.getElementById("validate").submit();


};




