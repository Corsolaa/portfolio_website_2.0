<?php
function error_handling(string $error): string
{
    switch ($error) {
        case "not_filled":
            return "Please fill in all fields.";
        case "invalid_mail":
            return "Please fill in a valid email.";
    }
    return "An error has occurred";
}