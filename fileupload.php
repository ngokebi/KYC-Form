<?php

// required headers
require_once '../config/headers.php';

if($statuses == 'Access'){

$server_url = $_SERVER['REQUEST_SCHEME']."://" . $_SERVER['HTTP_HOST']."/payrollserver";
$upload_dir = '../images/%s.%s';

global  $err1;

try {
   
    // Undefined | Multiple Files | $_FILES Corruption Attack
    // If this request falls under any of them, treat it invalid.
    if (
        !isset($_FILES['or t']['error']) ||
        is_array($_FILES['upfile']['error'])
    ) {
        throw new RuntimeException('Invalid parameters.');
    }

    // Check $_FILES['upfile']['error'] value.
    switch ($_FILES['upfile']['error']) {
        case UPLOAD_ERR_OK:
            break;
        case UPLOAD_ERR_NO_FILE:
            throw new RuntimeException('No file sent.');
        case UPLOAD_ERR_INI_SIZE:
        case UPLOAD_ERR_FORM_SIZE:
            throw new RuntimeException('Exceeded filesize limit.');
        default:
            throw new RuntimeException('Unknown errors.');
    }

    // You should also check filesize here.
    if ($_FILES['upfile']['size'] > 5000000) {
        throw new RuntimeException('Exceeded filesize limit.');
    }

    // DO NOT TRUST $_FILES['upfile']['mime'] VALUE !!
    // Check MIME Type by yourself.
    $finfo = new finfo(FILEINFO_MIME_TYPE);
    if (false === $ext = array_search(
        $finfo->file($_FILES['upfile']['tmp_name']),
        array(
            'jpg' => 'image/jpeg',
            'png' => 'image/png',
            'xls' => 'application/vnd.ms-excel',
            //xlsx files not uploading  bug here            
            'docx' => 'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
            'xlsx' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
            'pdf' => 'application/pdf',
        ),
        true
    )) {
        throw new RuntimeException('Invalid file format.');
    }

    // You should name it uniquely.
    // DO NOT USE $_FILES['upfile']['name'] WITHOUT ANY VALIDATION !!
    // On this example, obtain safe unique name from its binary data.

    $path = sprintf($upload_dir, sha1_file($_FILES['upfile']['tmp_name']), $ext);
    if (!move_uploaded_file( $_FILES['upfile']['tmp_name'], $path )) {

        throw new RuntimeException('Failed to move uploaded file.');
    }

      // set response code - 404 Not found
    http_response_code(201);
 
    // tell the user report does not exist
    echo json_encode(array("message" => "File is uploaded successfully", "Path" => str_replace("..","",$server_url.$path) ));
    
    //echo 'File is uploaded successfully.';

} catch (RuntimeException $e) {

    $err1 = $e->getMessage();
     // set response code - 404 Not found
     http_response_code(404);
 
     // tell the user report does not exist
     echo json_encode(array("message" => $err1));
    
    

}
}
?>