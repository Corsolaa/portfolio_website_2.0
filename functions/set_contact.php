<?php
include "../functions/mysql_con.php";
include "../functions/clean_data.php"
?>

<pre><?php
    if ($con != null) {
        echo "MYSQL connected. <br>";
    }
    echo "POST DATA: <br>";
    var_dump($_POST);
    ?>
</pre>

<?php
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

//INSERT INTO `email_requests` (`id`, `email`, `name`, `message`, `requested_on`)
// VALUES (NULL, 'bruno@oversticht.eu', 'Naam', 'This is a text message.', current_timestamp());