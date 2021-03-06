<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/Javascript.css">
    <title>Javascript|VCode</title>
</head>

<body>
    <div class="menu-bar">
        <ul>
            <li><a href="#"><b>VCode</b></a></li>
            <li><a href="index.php" target="_blank">Home</a></li>
            <li class="active"><a href="#">Online Courses</a>
                <div class="submenu1">
                    <ul>
                        <li><a href="html.php" target="_blank">HTML</a></li>
                        <li><a href="Javascript.php" target="_blank">Javascript</a></li>
                        <li><a href="python.php" target="_blank">Python</a></li>
                        <li><a href="sql.php" target="_blank">SQL</a></li>
                    </ul>
                </div>
            </li>
            <li><a href="#">Categories</a>
                <div class="submenu1">
                    <ul>
                        <li><a>Computer Science</a></li>
                        <li><a>Marketing</a></li>
                        <li><a>Mathematics</a></li>
                    </ul>
                </div>
            </li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="login.php" target="_blank">Login</a></li>
            <li><a href="signup.php" target="_blank">Signup</a></li>
        </ul>
    </div><br><br>
    <div class="intro">
        <br>
        <h1>JavaScript(JS)</h1>
        <br><br>
        <a href="https://en.wikipedia.org/wiki/JavaScript" target="_blank">
            <img src="https://www.miltonmarketing.com/wp-content/uploads/2018/04/Javascript_logo-1170x850.jpg"
                id="js_img"></a>


        <p id="intro" style="padding: 5%;">JavaScript is high-level, often just-in-time compiled, and multi-paradigm. It
            has curly-bracket syntax, dynamic typing, prototype-based object-orientation, and first-class functions.
            Alongside HTML and CSS, JavaScript is one of the core technologies of the World Wide Web. JavaScript
            enables interactive web pages and is an essential part of web applications. The vast majority of websites
            use
            it for client-side page behavior, and all major web browsers have a dedicated JavaScript engine to
            execute it.JavaScript supports event-driven, functional, and imperative programming styles. It has
            application
            programming interfaces (APIs) for working with text, dates, regular expressions, standard data structures,
            and the Document Object Model (DOM). JavaScript engines were originally used only in web browsers, but they
            are now core components of other runtime systems, such as Node.js and Deno.</p>
    </div><br><br><br><br><br>
    <div class="details">
        <br>
        <h2>Course details:</h2>

        <p style="padding: 10%;"> Version: ECMAScript 2020.<br>
            Course Duration: 61 hours(part of HTML Course).<br>
            Previous Language requirements: None.<br>
            Assignments: To be uploaded in the link given by the instructor.<br>
            Preferred IDE: Microsoft Visual Studio Code.<br></p>
    </div><br><br><br><br><br>
    <div class="instr">
        <div class="instra">
            <br>
            <h2 style="text-align: center; font-size:1.75em;">Faculties:</h2><br><br>
            <div class="instr1">
                <img src="https://sc01.alicdn.com/kf/H3beb4a5aca3d4c57adea6c3dc0a6be97d/200605461/H3beb4a5aca3d4c57adea6c3dc0a6be97d.png_.webp"
                    alt="Professor X" id="prof1" alt="Professor X">
                <p style="color:white;">Professor X dedicates his study entirely in Web Development. He has helped
                    many in leaning the full Web Developer Bootcamp. Click image to view profile.</p>
            </div><br>
            <div class="instr2">

                <img src="https://di2ponv0v5otw.cloudfront.net/posts/2020/10/05/5f7ba48cce5f1cc4ba989172/m_5f7ba48cce5f1cc4ba989173.jpeg"
                    alt="Professor Y" id="prof2" alt="Professor Y">
                <p style="color: white;">Professor Y is a young instructor, fresh from her college days, who has
                    completed
                    the entire Bootcamp and has taught many students till date. Click image to view profile.</p>
            </div>
        </div>
    </div>
    <br><br><br>
    <?php
        $con = mysqli_connect('localhost','root','');
        mysqli_select_db($con,'vcode');
        $result = mysqli_query($con,"select * from login where status = 1;");
        $rows = mysqli_num_rows($result);
        if($rows=='1'){
            echo "<center style='border: 1px solid black;width: 10%; margin: auto; border-radius: 5px;cursor:pointer;background-color: white; color: black; font-size: 30px'>enroll</center>";
        }
    ?><br>
</body>
<footer>
    <div class="footer">
        <p><br>
            <marquee class="marquee">Contact us on Instagram: @vcodeind, LinkedIn and Facebook
            </marquee>
        </p>
</footer>

</html>