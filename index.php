<html>

<head>
    <link rel="stylesheet" href="styles.css">
    <title>Login</title>
</head>

<body>
    <h1><u>Earth Bit Galle</u></h1>
    <h3>This is open to all earth institute studens.</h3>

    <div class="login-container">
        <div class="login-card">
            <form action="server.php" method="post">
                <h1>EUC Portal</h1>
                <div class="label">
                    <label for="name">Name : </label>
                    <input type="text" name="name" value="<?php if (isset($_COOKIE['username'])) echo $_COOKIE['username'] ?>">
                </div>
                <div class="label">
                    <label for="pwd">Password : </label>
                    <input type="password" name="pwd" value="<?php if (isset($_COOKIE['password'])) echo $_COOKIE['password'] ?>">
                </div>
                <div class="remember">
                    <input type="checkbox" name="remember"> Remember me <br><br>
                    <input class="button" type="submit" value="Submit">
                </div>
            </form>
        </div>
    </div>
</body>

</html>