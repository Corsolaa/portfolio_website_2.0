<?php
function cleanData($data): string
{
    global $con;
    $data = trim($data);
    $data = stripslashes($data);
    $data = mysqli_real_escape_string($con, $data);
    return htmlspecialchars($data);
}