<?php
/**
 * Created by PhpStorm.
 * User: Erica
 * Date: 5/19/17
 * Time: 2:19 PM
 */

function Connect()
{
   $dbhost = "localhost";
   $dbuser = "root";
   $dbpass = "ySQnQbcHtUcbX7Q5";
   $dbname = "responses";

    // $dbhost = "12.180.59.159";
    // $dbuser = "ericawal_user";
    // $dbpass = "Tm.R4xPw)g5;";
    // $dbname = "ericawal_responses";

    // Create connection
    $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die($conn->connect_error);
    return $conn;
}


