<?php 
include "classes/From.php";
$frm = new From(); 

$frm->request($_POST['teacher'], $_POST['student']);
