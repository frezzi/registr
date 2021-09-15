<?php 

$connect = mysqli_connect('localhost', 'root', '', 'my_database');
if($connect) {
	echo "db connect";
}
?> 