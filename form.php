<?php
include "connect.php";

if(isset($_POST["submit"])) {
    $chk="";  
    foreach($_POST['senator'] as $chk1)  
    {  
        $chk .= $chk1.",";  
    }  
    mysqli_query($conn,"INSERT INTO form1 VALUES(NULL,'$_POST[name]','$_POST[email]',
    '$_POST[age]','$_POST[role]','$_POST[voter]','$_POST[president]','$_POST[vicepresident]',
    '$chk','$_POST[comment]')");
}

include 'index.html';
?>