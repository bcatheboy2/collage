<?php
    $server="localhost";
    $username="root";
    $db="ragister";
    $passward="";
    $conn=mysqli_connect($server,$username,$passward,$db);
    if(!$conn)
    {
       echo"the database is couldn't connect";
    }
    // else
    // {
    //     echo"connect successful";
    // }
?>