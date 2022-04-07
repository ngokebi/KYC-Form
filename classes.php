<?php
require_once('Database.php');
class KycForm extends dbConnect
{
    public function insert(
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

            $sql = sprintf(
                "INSERT INTO kyctable ( Surname, MiddleName, FirstName, Email, PhoneNumber, `Address`, DOB, Gender, Identification, IdentityNumber, EmployerName, 
                EmployerAddress, OracleNumber, IPPISNumber, BVN, NMANumber, GovtID, Passport )  values (%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s)",
                self::makeSQLStrings($surname),
                self::makeSQLStrings($middlename),
                self::makeSQLStrings($firstname),
                self::makeSQLStrings($email),
                self::makeSQLStrings($phonenumber),
                self::makeSQLStrings($address),
                self::makeSQLStrings($dob),
                self::makeSQLStrings($gender),
                self::makeSQLStrings($identification),
                self::makeSQLStrings($identitynumber),
                self::makeSQLStrings($employername),
                self::makeSQLStrings($employeraddress),
                self::makeSQLStrings($oraclenumber),
                self::makeSQLStrings($ippisnumber),
                self::makeSQLStrings($bvn),
                self::makeSQLStrings($nmanumber),
                self::makeSQLStrings($govtid),
                self::makeSQLStrings($passport)
            );
        } else {
            $sql = sprintf(
                "INSERT INTO kyctable ( Surname, MiddleName, FirstName, Email, PhoneNumber, `Address`, DOB, Gender, Identification, IdentityNumber, IssueDate, `ExpireDate`, EmployerName, 
                EmployerAddress, OracleNumber, IPPISNumber, BVN, NMANumber, GovtID, Passport )  values (%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s)",
                self::makeSQLStrings($surname),
                self::makeSQLStrings($middlename),
                self::makeSQLStrings($firstname),
                self::makeSQLStrings($email),
                self::makeSQLStrings($phonenumber),
                self::makeSQLStrings($address),
                self::makeSQLStrings($dob),
                self::makeSQLStrings($gender),
                self::makeSQLStrings($identification),
                self::makeSQLStrings($identitynumber),
                self::makeSQLStrings($issuedate),
                self::makeSQLStrings($expiredate),
                self::makeSQLStrings($employername),
                self::makeSQLStrings($employeraddress),
                self::makeSQLStrings($oraclenumber),
                self::makeSQLStrings($ippisnumber),
                self::makeSQLStrings($bvn),
                self::makeSQLStrings($nmanumber),
                self::makeSQLStrings($govtid),
                self::makeSQLStrings($passport)
            );
        }
        if (self::insert_data($sql)) {
            echo "<script>
            alert('Successfully Saved');
            window.location.href='form.html';
            </script>";
            return true;
        }

        echo "<script>
        alert('Error in Submitting your Form');
        window.location.href='form.html';
        </script>";
        return false;
    }
}
