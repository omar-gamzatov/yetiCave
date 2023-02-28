<?php
    $email = (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL));
    if(!$email) {
        header('Location: ./sign-up.php?email_err=incorrect_email');
    } else var_dump($email);

    
?>