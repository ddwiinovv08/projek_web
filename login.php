<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
body{
    height: 100vh;
    background-image: url("");
    background-repeat: no-repeat;
    background-size: cover;
    background-position : center;
    color: black;
    font-family: sans-serif;

    display: flex;
    justify-content: center;
    align-items: center;
}
form{
    
}
</style>
<body>
    <h1> selamat datang </h1>
    <?php
    if(isset($_GET["error"])){
        echo $_GET["error"];
    }
    ?>
    <form action="proses_login.php"method="post">
        <div>
            Username :
            <input type="text" name="username"/>
    </div>
<div>
    Password :
    <input type="password" name="password"/>
</div>
<input type="submit" name="login" value="login">
</form>
</body>
</html>