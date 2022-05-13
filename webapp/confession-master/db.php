<?php

//Connect to Mysql
//mysql_connect("localhost","root", "");
//mysql_select_db("confession_board");

$con =mysqli_connect("localhost","root","","confession_board");

if (mysqli_connect_errno()){
	echo "db Connection Error: ".mysqli_connect_error(); 
}

?> 