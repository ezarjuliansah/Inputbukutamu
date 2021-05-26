<?php
$host="localhost";
$user_db="root";
$pass_db="";
$db="buku_tamu";
$koneksi=mysqli_connect ($host,$user_db,$pass_db) or die (mysqli_error());
mysqli_select_db ($koneksi,$db) or die (mysqli_error());
?>
© 2021 GitHub, Inc.