<?php

function generatePassword() {

       if (isset($_GET["generate"])) {
           $passwordLength = intval($_GET["passwordLength"]);

           $uppr_case = "ABCDEFGHIJKLMNOPQRSTUVWYZ";
           $lower_case = "abcdfghijklmnopqrstuvwxyz";
           $numbers = "0123456789";    
           $special_chars = "@#*?!";

           $chars = $uppr_case . $lower_case . $numbers . $special_chars;

           $password = "";

           for ($i=0; $i < $passwordLength; $i++) { 
               $randomChars = mt_rand(0, strlen($chars) - 1);
               $password .= $chars[$randomChars];
           }
           return $password;
       } 
    }
?>