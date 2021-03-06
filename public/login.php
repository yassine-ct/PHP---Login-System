<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Login System</title>
    <link rel="stylesheet" href="style/style.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

<body>
    <form action="./../includes/login.inc.php" method="POST" >

        <label>
            <div class="Icon">
                <span class="material-symbols-outlined">
                    mail
                </span>
            </div>
            <input type="text" name="username" placeholder="E-mail or Username" />
        </label>

        <label>
            <div class="Icon">
                <span class="material-symbols-outlined">
                    lock
                </span>
            </div>
            <input type="PASSWORD" name="password" placeholder="Enter your Password"/>
        </label>

        <button type="submit" name="SUBMIT" class="btn login FormControl">LOGIN</button>

        <p>
            Don't have an account?
            <a href="./register.php">Register</a>
        </p>
    </form>
</body>

</html>