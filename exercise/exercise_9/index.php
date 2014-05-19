<?php
if (isset($_POST['action'])) {
    $action =  $_POST['action'];
} else {
    $action =  'start_app';
}

switch ($action) {
    case 'start_app':
        $message = 'Enter some data and click on the Submit button.';
        break;
    case 'process_data':
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];

          
        $name = trim($name);
        $email = trim($email);
        $email = trim($email);

     
        if (empty($name)) {
            $message = 'You must enter a name.';
            break;
        }

       
        $name = strtolower($name);
        $name = ucwords($name);

        // get first name from complete name
        $i = strpos($name, ' ');
        if ($i === false) {
            $first_name = $name;
        } else {
            $first_name = substr($name, 0, $i);
        }

        if (empty($email)) {
            $message = 'You must enter an email address.';
            break;
        } else if(strpos($email, '@') === false) {
            $message = 'The email address must contain an @ sign.';
            break;
        } else if(strpos($email, '.') === false) {
            $message = 'The email address must contain a dot character.';
            break;
        }

      
        $phone = str_replace('-', '', $phone);
        $phone = str_replace('(', '', $phone);
        $phone = str_replace(')', '', $phone);
        $phone = str_replace(' ', '', $phone);

     
        if (strlen($phone) < 7) {
            $message = 'The phone number must contain at least seven digits.';
            break;
        }

       
        if (strlen($phone) == 7) {
            $part1 = substr($phone, 0, 3);
            $part2 = substr($phone, 3);
            $phone = $part1 . '-' . $part2;
        } else {
            $part1 = substr($phone, 0, 3);
            $part2 = substr($phone, 3, 3);
            $part3 = substr($phone, 6);
            $phone = $part1 . '-' . $part2 . '-' . $part3;
        }

        
        $message =
            "Hello $first_name,\n\n" .
            "Thank you for entering this data:\n\n" .
            "Name: $name\n" .
            "Email: $email\n" .
            "Phone: $phone\n";

        break;
}
include 'string_tester.php';
?>
        $message = "This page is under construction.\n" .
                   "Please write the code that process the data.";

        break;
}
include 'string_tester.php';
?>