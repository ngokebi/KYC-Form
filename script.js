// // Defining a function to display error message
// function printError(elemId, hintMsg) {
//     document.getElementById(elemId).innerHTML = hintMsg;
// }

// // Defining a function to validate form 
// function validateForm() {
//     // Retrieving the values of form elements 
//     var surname = document.kycform.surname.value;
//     var middle_name = document.kycform.middle_name.value;
//     var first_name = document.kycform.first_name.value;
//     var lastname = document.kycform.lastname.value;
//     var email = document.kycform.email.value;
//     var phone_number = document.kycform.phone_number.value;
//     var address = document.kycform.address.value;
//     var dob = document.kycform.dob.value;
//     var gender = document.kycform.gender.value;
//     var identification = document.kycform.identification.value;
//     var idnumber = document.kycform.idnumber.value;
//     var issuedate = document.kycform.issuedate.value;
//     var expdate = document.kycform.expdate.value;
//     var employer = document.kycform.employer.value
//     var eaddress = document.kycform.eaddress.value;
//     var onumber = document.kycform.onumber.value;
//     var ippisnumber = document.kycform.ippisnumber.value;
//     var nmanumber = document.kycform.nmanumber.value;
//     var govtid = document.kycform.govtid.value;
//     var passport = document.kycform.passport.value;


//     // Defining error variables with a default value
//     var surnameErr = middle_nameErr = first_nameErr = lastnameErr = emailErr = phone_numberErr = addressErr = dobErr = genderErr = identificationErr = idnumberErr =
//         issuedateErr = expdateErr = employerErr = eaddressErr = onumberErr = onumberErr = ippisnumberErr = nmanumberErr = govtidErr = passportErr = true;

//     // Validate surname

//     if (surname == "") {
//         printError("surnameErr", "Please enter your Surname");
//     }
//     else if (surname.length < 4 || surname.length > 15) {
//         printError("surnameErr", "Surname must be between 4 to 15 characters");
//     }
//     else {
//         printError("surnameErr", "");
//         surnameErr = false;
//     }




// // Validate email address
// if (email == "") {
//     printError("emailErr", "Please enter your email address");
// } else {
//     // Regular expression for basic email validation
//     var regex = /^\S+@\S+\.\S+$/;
//     if (regex.test(email) === false) {
//         printError("emailErr", "Please enter a valid email address");
//     } else {
//         printError("emailErr", "");
//         emailErr = false;
//     }
// }

//     // // Validate middle_name
//     if (middle_name == "") {
//         printError("middle_nameErr", "Please enter your middle_name");
//     } else {
//         var regex = /^[a-zA-Z\s]+$/;
//         if (regex.test(middle_name) === false) {
//             printError("middle_nameErr", "Please enter a valid middle_name");
//         } else {
//             printError("middle_nameErr", "");
//             middle_nameErr = false;
//         }
//     }

//     // // Validate first_name
//     if (first_name == "") {
//         printError("first_nameErr", "Please enter your first_name");
//     } else {
//         var regex = /^[a-zA-Z\s]+$/;
//         if (regex.test(first_name) === false) {
//             printError("first_nameErr", "Please enter a valid first_name");
//         } else {
//             printError("first_nameErr", "");
//             first_nameErr = false;
//         }
//     }

//     // Validate address
//     if (address == "") {
//         printError("addressErr", "Please enter your address");
//     } else {
//         printError("addressErr", "");
//         addressErr = false;
//     }

//     // // Validate mobile number
//     // if (mobile == "") {
//     //     printError("mobileErr", "Please enter your mobile number");
//     // } else {
//     //     var regex = /^[1-9]\d{9}$/;
//     //     if (regex.test(mobile) === false) {
//     //         printError("mobileErr", "Please enter a valid 10 digit mobile number");
//     //     } else {
//     //         printError("mobileErr", "");
//     //         mobileErr = false;
//     //     }
//     // }


//     // // Validate gender
//     // if (gender == "") {
//     //     printError("genderErr", "Please select your gender");
//     // } else {
//     //     printError("genderErr", "");
//     //     genderErr = false;
//     // }

//     // Prevent the form from being submitted if there are any errors
//     if ((surnameErr || emailErr || addressErr) == true) {
//         return false;
//     }
// };







 // // Document is ready
//  $(document).ready(function () {

//     // Validate Username
//     $('#usercheck').hide();
//     let usernameError = true;
//     $('#usernames').keyup(function () {
//         validateUsername();
//     });

//     function validateUsername() {
//         let usernameValue = $('#usernames').val();
//         if (usernameValue.length == '') {
//             $('#usercheck').show();
//             usernameError = false;
//             return false;
//         }
//         else if ((usernameValue.length < 3) ||
//             (usernameValue.length > 10)) {
//             $('#usercheck').show();
//             $('#usercheck').html
//                 ("**length of username must be between 3 and 10");
//             usernameError = false;
//             return false;
//         }
//         else {
//             $('#usercheck').hide();
//         }
//     }

//     // Validate Email
//     const email =
//         document.getElementById('email');
//     email.addEventListener('blur', () => {
//         let regex =
//             /^([_\-\.0-9a-zA-Z]+)@([_\-\.0-9a-zA-Z]+)\.([a-zA-Z]){2,7}$/;
//         let s = email.value;
//         if (regex.test(s)) {
//             email.classList.remove(
//                 'is-invalid');
//             emailError = true;
//         }
//         else {
//             email.classList.add(
//                 'is-invalid');
//             emailError = false;
//         }
//     })

//     // Validate Password
//     $('#passcheck').hide();
//     let passwordError = true;
//     $('#password').keyup(function () {
//         validatePassword();
//     });
//     function validatePassword() {
//         let passwordValue =
//             $('#password').val();
//         if (passwordValue.length == '') {
//             $('#passcheck').show();
//             passwordError = false;
//             return false;
//         }
//         if ((passwordValue.length < 3) ||
//             (passwordValue.length > 10)) {
//             $('#passcheck').show();
//             $('#passcheck').html
//                 ("**length of your password must be between 3 and 10");
//             $('#passcheck').css("color", "red");
//             passwordError = false;
//             return false;
//         } else {
//             $('#passcheck').hide();
//         }
//     }

//     // Validate Confirm Password
//     $('#conpasscheck').hide();
//     let confirmPasswordError = true;
//     $('#conpassword').keyup(function () {
//         validateConfirmPassword();
//     });
//     function validateConfirmPassword() {
//         let confirmPasswordValue =
//             $('#conpassword').val();
//         let passwordValue =
//             $('#password').val();
//         if (passwordValue != confirmPasswordValue) {
//             $('#conpasscheck').show();
//             $('#conpasscheck').html(
//                 "**Password didn't Match");
//             $('#conpasscheck').css(
//                 "color", "red");
//             confirmPasswordError = false;
//             return false;
//         } else {
//             $('#conpasscheck').hide();
//         }
//     }

//     // Submit button
//     $('#submitbtn').click(function () {
//         validateUsername();
//         validatePassword();
//         validateConfirmPassword();
//         validateEmail();
//         if ((usernameError == true) &&
//             (passwordError == true) &&
//             (confirmPasswordError == true) &&
//             (emailError == true)) {
//             return true;
//         } else {
//             return false;
//         }
//     });
// });






