<?php
   require APPROOT . '/views/includes/head.php';
?> 

<div class="navbar">
    <?php
       require APPROOT . '/views/includes/navigation.php';
    ?>

</div>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../public/css/SelectUserType.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Actor&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select User Type</title>
</head>
<body>
    <div class="container">
        <div class="container-asVendor">
            <h1>as a<br> vendor</h1>
            <div class="glass-asVendor">
                <!-- <img class="imgBlobLeft" src="../../public/images/rightblob.png" alt="blob left" > -->
                <img src="../images/vendor.png" alt="pick vendor image">
            </div>
            <div class="button-asVendor">
                <button type="button" class="buttonVendor" name="vendor"><a href="<?php echo URLROOT; ?>/users/register">Register</button>
            </div> 
        </div>
        <div class="container-asCustomer">
            <h1>as a<br> customer</h1>
            <div class="glass-asCustomer">
                <!-- <img class="imgBlobRight" src="../../public/images/leftblob.png" alt="blob right" > -->
                <img src="../images/customer.png" alt="pick customer image">
            </div>
            <div class="button-asCustomer">
                <button type="button" class="buttonCustomer" name="customer"><a href="<?php echo URLROOT; ?>/users/register">Register</button>
            </div>
        </div>
    </div>
</body>
</html>