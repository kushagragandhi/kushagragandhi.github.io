<?php
if (isset($_REQUEST['email']))  {
    //Email information
    $admin_email = "vvsasanka.uppu@gmail.com";
    $name = $_REQUEST['first_name'];
    $email = $_REQUEST['email'];
	$company = $_REQUEST['company'];
    $message = $_REQUEST['message'];

    //send email
    if (mail($admin_email, $name,  "From:" . $email)) {
        echo 1;
    }
    else {
    	echo 0;
    }
}
?>