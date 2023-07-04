<div class="header">
    <div class="left">
        <img class="duck" src="/images/gold_duck.ico" alt="">
        <h2 class="name">Bruno</h2>
    </div>
    <div class="right">
        <a class="<?php if($_SERVER['PHP_SELF'] == "/index.php"){echo "active ";}?>header-item" href="/">Home</a>
        <a class="header-item" href="/#projects">Projecten</a>
        <a class="<?php if(explode("/", $_SERVER['PHP_SELF'])[1] == "contact"){echo "active ";}?>header-item" href="/contact">Contact</a>
    </div>
</div>