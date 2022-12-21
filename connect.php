<?php

    $con=mysqli_connect("localhost","root","","allaboutme");

    if(!$con){
      die(mysqli_error("Error"+$con));
  }

?>