<?php

require_once("Database.php");
require_once('classes.php');

Database::getConnection();


if (isset($_POST['submit'])) {

    $surname = $_POST['surname'];
    $middlename = $_POST['middle_name'];
    $firstname = $_POST['first_name'];
    $email = $_POST['email'];
    $phonenumber = $_POST['phone_number'];
    $address = $_POST['address'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $identification = $_POST['identification'];
    $identitynumber = $_POST['idnumber'];
    $issuedate = $_POST['issuedate'];
    $expiredate = $_POST['expdate'];
    $employername = $_POST['employer'];
    $employeraddress = $_POST['eaddress'];
    $oraclenumber = $_POST['onumber'];
    $ippisnumber = $_POST['ippisnumber'];
    $nmanumber = $_POST['nmanumber'];
    $govtid = $_FILES["govtid"]['name'];
    $govtid_tmp = $_FILES["govtid"]['tmp_name'];
    $passport = $_FILES["passport"]['name'];
    $passport_tmp = $_FILES["passport"]['tmp_name'];


    if (
        !empty($surname) && !empty($middlename) && !empty($firstname) && !empty($email) && !empty($phonenumber) && !empty($address) && !empty($dob) && !empty($gender) && !empty($identification)
        && !empty($identitynumber) && !empty($employername) && !empty($employeraddress) && !empty($oraclenumber) && !empty($ippisnumber) && !empty($nmanumber) && !empty($govtid) && !empty($passport)
    ) {
        if (empty($issuedate) && empty($expiredate)) {
            
            $issuedate = 0000 - 00 - 00;
            $expiredate = 0000 - 00 - 00; {

                $uploadLocation = "images/";

                if ($govtid) {

                    move_uploaded_file($govtid_tmp, $uploadLocation . $govtid);
                }

                if ($passport) {

                    move_uploaded_file($passport_tmp, $uploadLocation . $passport);
                }

                KycForm::insert(
                    $surname,
                    $middlename,
                    $firstname,
                    $email,
                    $phonenumber,
                    $address,
                    $dob,
                    $gender,
                    $identification,
                    $identitynumber,
                    $issuedate,
                    $expiredate,
                    $employername,
                    $employeraddress,
                    $oraclenumber,
                    $ippisnumber,
                    $nmanumber,
                    $govtid,
                    $passport
                );
                header("location: form.html");
                exit();
            }
        } else {

            $uploadLocation = "images/";

            if ($govtid) {

                move_uploaded_file($govtid_tmp, $uploadLocation . $govtid);
            }

            if ($passport) {

                move_uploaded_file($passport_tmp, $uploadLocation . $passport);
            }

            KycForm::insert(
                $surname,
                $middlename,
                $firstname,
                $email,
                $phonenumber,
                $address,
                $dob,
                $gender,
                $identification,
                $identitynumber,
                $issuedate,
                $expiredate,
                $employername,
                $employeraddress,
                $oraclenumber,
                $ippisnumber,
                $nmanumber,
                $govtid,
                $passport
            );
            header("location: form.html");
            exit();
        }
    } 
    else {
        
        header("location: form.html");
        exit();
    }
}
