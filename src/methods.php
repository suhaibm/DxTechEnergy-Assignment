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

/**
 * It checks for a missing number in a consecutive series of numbers, both in assending or decending order.
 * 
 * @param array $numbers An array of consecutive numbers.
 * @return int The missing number.
 */
function findMissingNumber(array $numbers): int
{
    $rangeArr = range($numbers[0], end($numbers));

    return current(
        array_diff($rangeArr, $numbers)
    );
}

/**
 * Calculates the memory usage before and after performing on an array, and return the difference.
 * 
 * @param array $arr An array to operate on.
 * @return int The difference in memory usage before and after the operation.
 */
function calculateMemoryUsage(array $arr):int
{
    $before = memory_get_usage() . "\n";

    rsort($arr);

    return memory_get_usage() - $before . "\n";
}