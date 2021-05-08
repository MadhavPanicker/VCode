<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>
    <link rel=stylesheet href="styles/contact.css">
</head>

<body>
    <div class="menu-bar">
        <ul>
            <li><a href="#"><b>VCode</b></a></li>
            <li><a href="home.php" target="_blank">Home</a></li>
            <li><a href="#">Online Courses</a>
                <div class="submenu1">
                    <ul>
                        <li><a href="html.php" target="_blank">HTML</a></li>
                        <li><a href="javascript.php" target="_blank">Javascript</a></li>
                        <li><a href="python.php" target="_blank">Python</a></li>
                        <li><a href="sql.php" target="_blank">SQL</a></li>
                    </ul>
                </div>
            </li>
            
            <li><a href="blog.html" target="_blank">Blog</a></li>
            <li><a href="#">About</a></li>
            <li class="active" target="_blank"><a href="#">Contact</a></li>
            <li><a href="login.php" target="_blank">Login</a></li>
            <li><a href="signup.php" target="_blank">Signup</a></li>
        </ul>
    </div>
    <div class="main">
        <br><br>
        <h1 style="text-align: center;">Contact Us</h1><br><br>
        <form>
            Name<br>
            <input type="text"><br><br>
            Email<br>
            <input type="text"><br><br>
            Feedback<br>
            <textarea class="feedback"></textarea><br><br>

            <input type="submit"><br><br>
        </form>
</body>

</html>