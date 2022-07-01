<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .index-login {
            width: 1200px;
            margin:0 auto;
            display: flex;
        }
        .wrapper {
            width:50%;
        }
        .wrapper form input {
            display: block;
            border:1px solid grey;
            border-radius: 5px;
            margin:4px 0;
            padding: 3px 7px;
        }

    </style>
</head>
<body>
    <section class="index-login">
        <div class="wrapper">
            <h4>SING UP</h4>
            <form action="includes/signup.inc.php" method="post">
                <input type="text" name="uid" placeholder="Username"/>
                <input type="password" name="pwd" placeholder="Password"/>
                <input type="password" name="pwdrepeat" placeholder="repeat Password"/>
                <input type="email" placeholder="E-Mail"/>
                <br>
                <input type="submit" name="submit" value="Registration"/>

            </form>
        </div>
        <div class="wrapper">
            <h4>Login</h4>
            <form action="includes/login.inc.php" method="post">
                <input type="text" name="uid" placeholder="Username"/>
                <input type="password" name="pwd" placeholder="Password"/>
                <br>
                <input type="submit" name="submit" value="Login"/>
            </form>
        </div>




    </section>
</body>
</html>