<?php

    session_start();
    if(isset($_SESSION['user_name'])){
        header('Location: home.php');
    }
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Akaya+Kanadaka&family=Roboto:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/common.css">
    <title>Sign Up</title>
</head>
<body>
    <div class="form-home">
    <h3 class="title-form"> Sign Up</h3>
        <form id="formSignup" class="form-basic">
            <p class="data-user">User Name</p>
            <input type="text" name="user_name" maxlength="20"  placeholder="  jhon.example"  onkeyup="javascript:this.value=this.value.toLowerCase();">
            <p class="data-user">Password</p>
            <input type="password" name="user_password" maxlength="20" >
            <button class="btnCommon" id="btnSingUp" type="submit">Sing Up</button>
        </form>
        <div class="messages_">
            <p id = "message"></p>
        </div>
        <p class="acount"> You have an account?<a href="sign_in.php"> Sign In</a><p>
    </div>
</body>
<footer>
    <script src="../js/sign_up.js"></script>
</footer>
</html>