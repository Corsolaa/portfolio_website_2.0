<?php
$title = "Bruno B - Contact";
$stylesheet = ["contact"];
include "../template_parts/head.php";
include "../functions/error_handling.php";
?>

<div class="content">
    <?php
    if (isset($_GET["success"])) {
        ?>
        <div class="form_success">
            <div>
                <h1>You'r message has been send!</h1>
                <p>I will contact you as soon as possible.</p>
            </div>
            <iframe src="../images/giphy.gif" width="377" height="480" frameBorder="0" allowFullScreen></iframe>
        </div>
        <?php
    } else {
        ?>
        <form action="../user_input/set_contact.php" method="post">
            <h1>Want to roll into a project together?</h1>
            <p style="margin-top: 10px">Feel free to connect for collaborations or a friendly greeting.</p>
            <br>
            <a href="mailto:bruno@oversticht.eu" style="text-decoration: underline">bruno@oversticht.eu</a>
            <br>
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
            <input class="submit_but" type="submit" value="Submit">
        </form>
        <?php
    }
    ?>

</div>