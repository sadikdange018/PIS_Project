<?php
$email='rtata@tcs.com';
$password=md5('user@1');
$conn = mysqli_connect('localhost','root','','carrental');

$query = mysqli_query($conn, "select * from tblrole where id=1");
if($row = mysqli_fetch_array($query)){
    echo $row['permissions'];
    
}


?>