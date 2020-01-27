<?php 
session_start();

class From{
    
    function request($sr, $st)
    {
         $_SESSION['session_sir'] = strtolower($sr);
         $_SESSION['session_std'] = strtolower($st);

         header('location: data.php');
         exit;
    }

}