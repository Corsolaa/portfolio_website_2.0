<?php
include "../functions/mysql_con.php";
include "../functions/clean_data.php";

if (empty($_POST["email"]) || empty($_POST["name"]) || empty($_POST["message"])) {
    header("Location: /contact?error=not_filled");
    die();
}
if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    header("Location: /contact?error=invalid_mail");
    die();
}

$email = cleanData($_POST["email"]);
$name = cleanData($_POST["name"]);
$message = cleanData($_POST["message"]);

$sql_query = "INSERT INTO `email_requests` (`id`, `email`, `name`, `message`, `requested_on`)
                VALUES (NULL, '$email', '$name', '$message', current_timestamp());";

$con->query($sql_query);

header("Location: /contact?success");
die();