<?php
include("template_parts/blobs.php");
?>

<!DOCTYPE html>
<html lang="en">
<?php
include("template_parts/head.php");
?>
<body>

<?php include("template_parts/header.php") ?>

<div class="content">
    <div class="section module_6-4">
        <div class="container info_box info_box_1">
            <div class="top-section">
                <h1>Hello, I'm Bruno. <br>
                    a software developer with 5 years of experience.</h1>
                <p>I really like to make peoples dreams into websites.</p>
                <p>Also to create fun applications, websites and easy to use userinterfaces.</p>
            </div>
            <div class="lower-section">
                <a href="#">Contact me</a>
                <div class="icons">
                    <a class="icon" href="https://github.com/Corsolaa/">
                        <?php include("svg/github_svg.php") ?>
                    </a>
                    <a class="icon" href="https://twitter.com/Corsolaa112">
                        <?php include("svg/twitter_svg.php") ?>
                    </a>
                    <a class="icon" href="https://www.linkedin.com/in/bruno-bouwman-6a03a4238/">
                        <?php include("svg/linked_in_svg.php") ?>
                    </a>
                </div>
            </div>
        </div>
        <div class="container pic_cover picture_box_1"></div>
    </div>

    <div class="section module_4-6">
        <div class="container pic_cover picture_box_2"></div>
        <div class="container info_box info_box_2">
            <div class="technologies">
                <h1>The technologies that I master.</h1>
                <div class="titles">
                    <?php
                    generate_blob_field("Languages:", ["PHP", "HTML", "CSS", "JS", "Python", "C", "C#", "Java"]);
                    generate_blob_field("Database structures:", ["MySQL", "MongoDB"]);
                    generate_blob_field("Programs that I use:", ["Wordpress", "PHPStorm", "VSCode", "Termius",
                        "Sublime", "Postman", "Git", "FileZilla"]);
                    ?>
                </div>
            </div>
        </div>
    </div>

    <div class="section module_1-1">
        <div class="container project">
            <div class="inside">
                <div class="image">
                    <img src="images/logo-epv.png" alt="erkend_verhuizen_logo">
                </div>
                <div class="text_space">
                    <h1>Erkend Verhuizen</h1>
                </div>
            </div>
        </div>
        <div class="container" style="background: red;">

        </div>
    </div>
</div>
</body>
</html>