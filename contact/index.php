<?php
$title = "Bruno B - Contact";
$stylesheet = ["contact"];
include("../template_parts/head.php");
?>

<div class="content">
    <form action="set_contact.php">
        <label for="email">
            <span>Your email:</span>
            <input type="text" id="email">
        </label>
        <label for="name">
            <span>Your name:</span>
            <input type="text" id="name">
        </label>
        <label class="message_sect" for="message">
            <span>Message:</span>
            <textarea name="message" id="message" cols="30" rows="10"></textarea>
        </label>
        <input class="submit_but" type="submit" value="SUBMIT">
    </form>
</div>