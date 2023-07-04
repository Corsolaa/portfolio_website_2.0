<?php
function error_handling(string $error) {
    switch ($error) {
        case "not_filled":
            return "Please fill in all fields.";
    }
    return "An error has occurred";
}