<?php
   $usr_digitato = $_REQUEST["usr"];
   $host = "127.0.0.1:3307";
   $phpuser = "root";
   $phppwd = "";
   $dbname = "approcciavanzatiprogetto";
   $conn = new mysqli($host,$phpuser,$phppwd,$dbname);
   $query = "select usr from profilo where usr=\"$usr_digitato\" ";
   $result = $conn->query($query);
   $quante_tuple = $result->num_rows; 
   if ($quante_tuple== 0){
	   echo"0"; }
   if ($quante_tuple!= 0){
	   echo"1"; }
