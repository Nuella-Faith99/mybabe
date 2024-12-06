<?php
                              //username     password   databasename
$conn=new mysqli("localhost", "babymi_user", "mylove", "babe");
if (mysqli_connect_errno()){
    printf("connect failed:%s\n", mysqli_connect_error());
    exit();
}

?>