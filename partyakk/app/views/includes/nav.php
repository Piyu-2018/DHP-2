<!-- <nav class="top-nav">
    <ul>
        <li>
            <a href="<?php echo URLROOT; ?>/pages/index">Home</a>
        </li>
        <li>
            <a href="<?php echo URLROOT; ?>/pages/about">About</a>
        </li>
        <li>
            <a href="<?php echo URLROOT; ?>/pages/projects">Projects</a>
        </li>
        <li>
            <a href="<?php echo URLROOT; ?>/pages/posts">Blog</a>
        </li>
        <li>
            <a href="<?php echo URLROOT; ?>/pages/contact">Contact</a>
        </li>
        <li class="btn-login">
            <?php if(isset($_SESSION['user_id'])) : ?>
                <a href="<?php echo URLROOT; ?>/users/logout">Log out</a>
            <?php else : ?>
                <a href="<?php echo URLROOT; ?>/users/login">Login</a>
            <?php endif; ?>
        </li>
    </ul>
</nav> -->

<body>
        <div class="nav-bar">
            <div class="logo">
                <img class="logo-image" src="<?php echo URLROOT ?>../public/images/navbarlogo.png" alt="">
            </div>
            <div class="nav-items">
                <ul class="nav-links">
                    <li><a href="<?php echo URLROOT; ?>/pages/browse">Browse</a></li>
                    <li><a href="<?php echo URLROOT; ?>/pages/contact">Contact Us</a></li>
                    <li><a href="<?php echo URLROOT; ?>/pages/howItWork">How it works</a></li>
                </ul>
            </div>
            <button class="login-button" type="button">
                <?php if(isset($_SESSION['user_id'])) : ?>
                    <a href="<?php echo URLROOT; ?>/users/logout">Log out</a>
                <?php else : ?>
                    <a href="<?php echo URLROOT; ?>/users/login">Login</a>
                <?php endif; ?>
                <!-- <button class="login-button"type="button">Log in</button>
                <button class="signup-button"type="button">Sign up</button> -->
                </button>
            <button class="signup-button" type="button"><a href="<?php echo URLROOT; ?>/users/register">Sign up</a></button> 
        </div>
</body>
