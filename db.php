<?php

 $db=mysqli_connect("localhost","root","","databaseconncode");

if($db){
    echo 'yes connected';

}
else{
    echo 'not connected';
}
?>