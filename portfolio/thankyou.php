

<?php
require 'includes/connection.php';
$conn    = Connect();
$name    = $conn->real_escape_string($_REQUEST['u_name']);
$email   = $conn->real_escape_string($_REQUEST['u_email']);
$subj    = $conn->real_escape_string($_REQUEST['subj']);
$message = $conn->real_escape_string($_REQUEST['message']);
$query   = "INSERT into tb_cform (u_name,u_email,subj,message) 
  VALUES('" . $name . "','" . $email . "','" . $subj . "','" . $message . "')";
$success = $conn->query($query);

if (!$success) {

    die("That didn't work...  \nQUERY:\n$query");
//    die("Couldn't enter data: ".$conn->error);

}

echo "Thank you for your message.<br>";

echo    "<p>To return to site, click <a href='http://portfolio.ericawalkerwebsites.com'>here</a></p>";

    $conn->close();
    
?>

