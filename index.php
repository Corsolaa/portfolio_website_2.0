<?php
$title = "Bruno B";
include("template_parts/head.php");
include("template_parts/blobs.php");
include("template_parts/header.php");
?>

<div class="content">
    <div class="container pic_cover picture_box_big_boi " style="display: none;" ></div>
    <div class="section smoll_sec row_1 module_6-4">
        <div class="container info_box info_box_1">
            <div class="top-section">
                <div class="text">
                    <h1>Hello, I'm Bruno. <br>
                        a software developer with 5 years of experience.</h1>
                    <p>I really like to make peoples dreams into websites.</p>
                    <p>Also to create fun applications, websites and easy to use userinterfaces.</p>
                </div>
            </div>

            <?php include("template_parts/contact_small.php") ?>
        </div>
        <div class="container pic_cover picture_box_1"></div>
    </div>

    <div class="section smoll_sec row_2 module_4-6">
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

    <div class="container pic_cover picture_box_big_boi_second second" style="display: none;" ></div>

    <div class="section module_1-1" id="projects">
        <div class="container project">
            <div class="inside">
                <div class="text_space">
                    <h2>Erkend Verhuizen</h2>
                    <p>Dashboard to find recognised movers.</p>
                </div>
                <div class="image">
                    <img src="/images/erkend_verhuizen.png" alt="erkend_verhuizen_logo">
                </div>
            </div>
        </div>
        <div class="container project" style="background: gray;">
            <div class="inside">
                <div class="text_space">
                    <h2>VillaArena</h2>
                    <p>A quiz program that gives you a personal style.</p>
                </div>
                <div class="image">
                    <img src="/images/villaarena_woonquiz.png" alt="villa-arena_woon-quiz">
                </div>
            </div>
        </div>
    </div>

    <div class="section module_1 smoller_sec" id="contact">
        <div class="container contact info_box">
            <div class="top">
                <h1>Want to roll into a project together?</h1>
                <p>Feel free to connect for collaborations or a friendly greeting.</p>
                <p>bruno@oversticht.eu</p>
            </div>
            <?php include("template_parts/contact_small.php") ?>
        </div>
    </div>
</div>
</body>
</html>