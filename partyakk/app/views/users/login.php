<?php
   require APPROOT . '/views/includes/head.php';
?> 

<div class="navbar">
    <?php
       require APPROOT . '/views/includes/nav.php';
    ?>

</div>

<!-- <?php var_dump($_SESSION); ?>
<div class="container-login">
    <div class="wrapper-login">
        <h2>Sign in</h2>

        <form action="<?php echo URLROOT; ?>/users/login" method ="POST">
            <input type="text" placeholder="Username *" name="username">
            <span class="invalidFeedback">
                <?php echo $data['usernameError']; ?>
            </span>

            <input type="password" placeholder="Password *" name="password">
            <span class="invalidFeedback">
                <?php echo $data['passwordError']; ?>
            </span>

            <button id="submit" type="submit" value="submit">Submit</button>

            <p class="options">Not registered yet? <a href="<?php echo URLROOT; ?>/users/register">Create an account!</a></p>
        </form>
    </div>
</div> -->
<!DOCTYPE html>
<html>
    <head>
        <title>Partyak Login Page</title>
        <link rel="stylesheet" href="<?php echo URLROOT ?>../public/css/login.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    </head>
    <body>
        <div class="login-form" >
            
            <div class="container">
                <div class="main">
                    
                    <div class="content">
                        
                        <form action="<?php echo URLROOT; ?>/users/login" method="POST">
                        <input type="text" placeholder="Username *" name="username" required>
                        <span class="invalidFeedback">
                            <?php echo $data['usernameError']; ?>
                        </span>

                        <input type="password" placeholder="Password *" name="password"  required>
                        <span class="invalidFeedback">
                            <?php echo $data['passwordError']; ?>
                        </span>

                        <button name="submit" class="btn">Login</button>
                        </form>
                        <p class="account"><a href="#"> Forgot Password</a></p>
                        <p class="account">Not a member? <a href="<?php echo URLROOT; ?>/users/register"> Register</a></p>
                    </div>

                    <div class="sociallogin">
                        <a href="#" class="google">
                            <i class="fa fa-google fa-fw"></i> CONTINUE WITH GOOGLE</a>
                          
                        <!-- <a href="#" class="apple">
                            <i class="fa fa-apple fa-fw"></i> CONTINUE WITH APPLE</a>
                          
                        <a href="#" class="facebook">
                            <i class="fa fa-facebook fa-fw"></i> CONTINUE WITH FACEBOOK</a> -->
                    </div>   
                </div>
            </div>
        </div>
    </body>
</html>

