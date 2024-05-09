<?php
$message = '';
foreach ($_POST as $name => $value) {
    if ('submit' != $name) {
        if (is_array($value)) {
            $value = implode(', ', $value);
        }
        $message .= ucfirst($name) . "is $value. \n\n";
    }
}

$to = "Anudeep Kadiyam<anudeepkadiyam@gmail.com>";
$subject = "Reason for contact: " . $_POST['reason'];

if (mail($to, $subject, $message)) {
    echo "<h3>Your message has been sent.</h3>";
}
