<?php

 $db=mysqli_connect("localhost","root","","databaseconncode");

if($db){
    echo 'yes connected';

}
else{
   die('stop the system'.mysqli_error($db));
}
?>
