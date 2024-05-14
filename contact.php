<?php 

try {
    //code...
    mail("lucasdechavanne22@gmail.com", $_POST['firstname'] . ' '. $_POST['lastname'], $_POST['message']);
    var_dump('done');
} catch (\Throwable $th) {
    throw $th;
}



