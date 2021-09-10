<?php
   require APPROOT . '/views/includes/head.php';
?>

<div class="navbar">
    <?php
       require APPROOT . '/views/includes/nav.php';
    ?>
</div>

<!-- <div class="container-login">
    <div class="wrapper-login">
        <h2>Register</h2>

            <form
                id="register-form"
                method="POST"
                action="<?php echo URLROOT; ?>/users/register"
                >
            <input type="text" placeholder="Username *" name="username">
            <span class="invalidFeedback">
                <?php echo $data['usernameError']; ?>
            </span>

            <input type="email" placeholder="Email *" name="email">
            <span class="invalidFeedback">
                <?php echo $data['emailError']; ?>
            </span>

            <input type="password" placeholder="Password *" name="password">
            <span class="invalidFeedback">
                <?php echo $data['passwordError']; ?>
            </span>

            <input type="password" placeholder="Confirm Password *" name="confirmPassword">
            <span class="invalidFeedback">
                <?php echo $data['confirmPasswordError']; ?>
            </span>

            <button id="submit" type="submit" value="submit">Submit</button>

            <p class="options">Not registered yet? <a href="<?php echo URLROOT; ?>/users/register">Create an account!</a></p>
        </form>
    </div>
</div> -->


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../public/css/cussign.css">
  <title>Document</title>
</head>
<body>
    <div class="content">
      <form action="<?php echo URLROOT; ?>/users/register" class="form-area"  method="POST"> 
        <div class="image-up">
          <div class="image">
            <input type="image" placeholder="Image" name="image">
          </div><br>
          <div class="up">
            <div class="upload">
              <input type="submit" value="Upload" name="upload">
            </div>
          </div>
        </div>
        <div class="user-details">
        <div class="name">
          <div class="input-box1">
            <input type="text" placeholder="First Name" name="fname" required>
          </div>
          <div class="input-box2">
            <input type="text" placeholder="Last Name" name="lname" required>
          </div>
        </div>
          <div class="input-box3">
            <input type="text" placeholder="Username" name="username" required>
            <span class="invalidFeedback">
                <?php echo $data['usernameError']; ?>
          </span>
          </div>
          
          <div class="input-box4">
            <input type="text" placeholder="NIC" name="nic" required>
          </div>
          <div class="input-box5">
            <input type="email" placeholder="Email"name="email" required>
          </div>
          <div class="input-box6">
            <input type="text" placeholder="Password" name="password" required>
            <span class="invalidFeedback">
                <?php echo $data['passwordError']; ?>
            </span>
          </div>
          <div class="input-box7">
            <input type="text" placeholder="Confirm password" name="confirmPassword" required>
            <span class="invalidFeedback">
                <?php echo $data['confirmPasswordError']; ?>
            </span>
          </div>
          <div class="agree">
            <div class="tick">
              <input type="checkbox" placeholder="Agree" name="agre" required>
            </div>
            <div class="agreement">
              <lable>I agree to the Terms & Conditions and Privacy Policy</lable>
            </div>
          </div>
          <div class="submit">
            <div class="button"> 
              <input type="submit" value="Register">
            </div>
            <div class="text">
              <lable>Already a member? <a href="<?php echo URLROOT; ?>/users/login"> Login</a></lable>
            </div>
          <div>
      </div>   
      </form>
    </div>
  </div> 
</body>
</html>