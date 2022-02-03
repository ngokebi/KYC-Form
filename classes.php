<?php

require_once("Database.php");

Database::getConnection();

class KycForm
{

    static public function insert(
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
    ) {


        $create = "INSERT INTO kyctable ( Surname, MiddleName, FirstName, Email, PhoneNumber, Address, DOB, Gender, Identification, IdentityNumber, IssueDate, ExpireDate, EmployerName, 
        EmployerAddress, OracleNumber, IPPISNumber, NMANumber, GovtID, Passport ) VALUES (:Surname, :MiddleName, :FirstName, :Email, :PhoneNumber, :Address, :DOB, :Gender, :Identification, :IdentityNumber, :IssueDate, :ExpireDate, :EmployerName, 
        :EmployerAddress, :OracleNumber, :IPPISNumber, :NMANumber, :GovtID, :Passport)";

        Database::query($create);
        Database::bindValue(":Surname", $surname);
        Database::bindValue(":MiddleName", $middlename);
        Database::bindValue(":FirstName", $firstname);
        Database::bindValue(":Email", $email);
        Database::bindValue(":PhoneNumber", $phonenumber);
        Database::bindValue(":Address", $address);
        Database::bindValue(":DOB", $dob);
        Database::bindValue(":Gender", $gender);
        Database::bindValue(":Identification", $identification);
        Database::bindValue(":IdentityNumber", $identitynumber);
        Database::bindValue(":IssueDate", $issuedate);
        Database::bindValue(":ExpireDate", $expiredate);
        Database::bindValue(":EmployerName", $employername);
        Database::bindValue(":EmployerAddress", $employeraddress);
        Database::bindValue(":OracleNumber", $oraclenumber);
        Database::bindValue(":IPPISNumber", $ippisnumber);
        Database::bindValue(":NMANumber", $nmanumber);
        Database::bindValue(":GovtID", $govtid);
        Database::bindValue(":Passport", $passport);


        if (Database::execute()) {
            return true;
        } else {
            return false;
        }

        if (Database::query($create) === false) {
            $err1 = $stmt::errorInfo();
            throw new PDOException();
        }
    }


    // static public function normal_upload()
    // {
    //     $uploadLocation = "images/";
    //     $uploadMainTo = null;
    //     if (isset($_FILES['govtid'])) {

    //         $path = $_FILES['govtid']['name']; // file means your input type file name
    //         $ext = pathinfo($path, PATHINFO_EXTENSION);

    //         if ($ext == "jpg" or $ext == "jpeg" or $ext == "gif" or $ext == "png" or $ext == "pdf") {
    //             echo "Upload successful";
    //         } else {
    //             // your invalid code here like...
    //             echo "Invalid image format. Only upload JPG or JPEG or GIF or PNG";
    //             header('Location: form.html');
    //             exit;
    //         }


    //         $main_image_name = $_FILES['govtid']['name'];
    //         $main_image_size = $_FILES['govtid']['size'];
    //         $main_image_tmp = $_FILES['govtid']['tmp_name'];
    //         $uploadMainTo = $uploadLocation . sa(time() . mt_rand(43, 672882) . bin2hex(random_bytes(16)) . trim($main_image_name));
    //         $govtid = move_uploaded_file($main_image_tmp, $uploadMainTo);
    //     }

    //     $uploadSecondTo = null;
    //     if (isset($_FILES['passport'])) {

    //         $path = $_FILES['passport']['name']; // file means your input type file name
    //         $ext = pathinfo($path, PATHINFO_EXTENSION);

    //         if ($ext == "jpg" or $ext == "jpeg" or $ext == "gif" or $ext == "png" or $ext == "pdf") {
    //             // your code here like...
    //             echo "Upload successful";
    //         } else {
    //             // your invalid code here like...
    //             echo "Invalid image format. Only upload JPG or JPEG or GIF or PNG";
    //             header('Location: form.html');
    //             exit;
    //         }

    //         $second_image_name = $_FILES['passport']['name'];
    //         $second_image_size = $_FILES['passport']['size'];
    //         $second_image_tmp = $_FILES['passport']['tmp_name'];
    //         $uploadMainTo = $uploadLocation . sa(time() . mt_rand(43, 672882) . bin2hex(random_bytes(16)) . trim($main_image_name));
    //         $passport = move_uploaded_file($second_image_tmp, $uploadSecondTo);
    //     }
    // }
}
