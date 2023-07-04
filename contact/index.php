<?php
$title = "Bruno B - Contact";
$stylesheet = ["contact"];
include "../template_parts/head.php";
include "../functions/error_handling.php";
?>

<div class="content">
    <?php
    if (isset($_GET["success"])) {
        echo "bonjour";
    } else {
        ?>
        <form action="../user_input/set_contact.php" method="post">
            <label for="email">
                <span>E-mail:</span>
                <input type="email" name="email" id="email">
            </label>
            <label for="name">
                <span>Naam:</span>
                <input type="text" name="name" id="name">
            </label>
            <label class="message_sect" for="message">
                <span>Message:</span>
                <textarea maxlength="1000" name="message" id="message" cols="30" rows="10"></textarea>
            </label>
            <?php
            if (isset($_GET["error"])) {
                ?>
                <p class="error_handling"><?php echo error_handling($_GET["error"]) ?></p>
                <?php
            }
            ?>
            <input class="submit_but" type="submit" value="SUBMIT">
        </form>
        <?php
    }
    ?>

</div>