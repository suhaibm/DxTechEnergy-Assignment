<?php

namespace Assignment\Src\Methods;

/**
 * Checks is the email format is valid. It was done in 2 ways, one using a php built in method
 * and another way was by defining a regular expression, which I believe would be more accurate.
 * 
 * @param string $email email to be checked.
 * @return bool true is the email format is valid, and false if otherwise.
 */
function isValidEmail(string $email): bool
{
    $regex = '/^[_a-zA-Z0-9-]+(\.[_a-zA-Z0-9-]+)*@[a-zA-Z0-9-]+(\.[a-zA-Z0-9-]+)*(\.[a-zA-Z]{2,3})$/'; 
    
    return preg_match($regex, $email);

    // the php built in mehtod for checking the email validation.
    // return filter_var($email, FILTER_VALIDATE_EMAIL);
}
