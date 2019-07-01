<?php

	//@session_start();
	//$host = 'mariadb';
	$host = 'mariadb';
	$user = 'root';
   	$pass = 'root';
	$name = 'message';
	$link = mysqli_connect("$host", "$user", "$pass",$name);
	//$_SESSION['link'] = mysqli_connect('$host', '$user', '$pass','$name');
    mysqli_query("set name utf8");
    if(!$link){
    	echo 'error to open db'.mysqli_connect_error();
    }
    else{
        //echo "AC to open db";
    }
    ?>