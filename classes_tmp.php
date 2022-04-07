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
        $bvn,
        $nmanumber,
        $govtid,
        $passport
    ) {

        if (empty($issuedate) || $issuedate == 0000 - 00 - 00 || empty($expiredate) || $expiredate == 9999 - 99 - 99) {
            $create = "INSERT INTO kyctable ( Surname, MiddleName, FirstName, Email, PhoneNumber, Address, DOB, Gender, Identification, IdentityNumber, EmployerName, 
            EmployerAddress, OracleNumber, IPPISNumber, BVN, NMANumber, GovtID, Passport ) VALUES (:Surname, :MiddleName, :FirstName, :Email, :PhoneNumber, :Address, :DOB, :Gender, :Identification, :IdentityNumber, :EmployerName, 
            :EmployerAddress, :OracleNumber, :IPPISNumber, :BVN, :NMANumber, :GovtID, :Passport)";

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
            Database::bindValue(":EmployerName", $employername);
            Database::bindValue(":EmployerAddress", $employeraddress);
            Database::bindValue(":OracleNumber", $oraclenumber);
            Database::bindValue(":IPPISNumber", $ippisnumber);
            Database::bindValue(":BVN", $bvn);
            Database::bindValue(":NMANumber", $nmanumber);
            Database::bindValue(":GovtID", $govtid);
            Database::bindValue(":Passport", $passport);


            if (Database::execute()) {
                return true;
            }

            if (Database::query($create) === false) {
                $err1 = self::$stmt::errorInfo();
                throw new PDOException();
            }
        } else {
            $create = "INSERT INTO kyctable ( Surname, MiddleName, FirstName, Email, PhoneNumber, Address, DOB, Gender, Identification, IdentityNumber, IssueDate, ExpireDate, EmployerName, 
        EmployerAddress, OracleNumber, IPPISNumber, BVN, NMANumber, GovtID, Passport ) VALUES (:Surname, :MiddleName, :FirstName, :Email, :PhoneNumber, :Address, :DOB, :Gender, :Identification, :IdentityNumber, :IssueDate, :ExpireDate, :EmployerName, 
        :EmployerAddress, :OracleNumber, :IPPISNumber, :BVN, :NMANumber, :GovtID, :Passport)";

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
            Database::bindValue(":BVN", $bvn);
            Database::bindValue(":NMANumber", $nmanumber);
            Database::bindValue(":GovtID", $govtid);
            Database::bindValue(":Passport", $passport);


            if (Database::execute()) {
                return true;
            }

            if (Database::query($create) === false) {
                $err1 = self::$stmt::errorInfo();
                throw new PDOException();
            }
        }
    }
}
