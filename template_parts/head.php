<?php
// Check if there is a title set.
if (!isset($title)) {
    $title = "Bruno B";
}
if (!isset($stylesheet)) {
    $stylesheet = [];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="description of the website.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex, nofollow"/>
    <meta name="author" content="Bruno B">

    <title><?php echo $title ?></title>

    <?php
    foreach ($stylesheet as $path) {
        ?>
        <link rel="stylesheet" href="/stylesheets/<?php echo $path?>.css">
        <?php
    }
    ?>
    <link rel="stylesheet" href="/stylesheets/basic.css">
    <link rel="icon" href="/images/gold_duck.ico">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,400;0,700;1,400;1,700&display=swap"
          rel="stylesheet">
</head>
<body>
<?php
include(__DIR__ . "/header.php");?>