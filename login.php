<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image" href="5087579.png">
    <title>Sign In</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>

    <div id="form">
        <img src="5087579.png" id="logo">
        <h1>Log In</h1>
        <br>
        <form method="POST" name="form" action="#">
            <div class="inputbox">
                <label for="uname">Username:</label>
                <input type="text" id="uname" name="uname" placeholder="Enter Your User Name" title="Enter User Id" required autofocus>
                <i class='bx bxs-user'></i>


            </div>
            <br>
            <div class="inputbox">
                <label for="passw">Password:</label>
                <input type="password" id="passw" name="passw" placeholder="Enter Your password" required>
                <div class="lock">
                    <i class='bx bxs-lock-alt'></i>
                </div>
            </div>
            <div id="button">
                <button id="btn" type="submit">Continue</button>
                <button id="rst" type="reset">Clear</button>
            </div>
            <div>
                <a class="rlink" href="register.php">Register Now</a>
            </div>
            <div class="socialm">
                <p>You can reach me on..</p>
                <br>
                <a class="slink" href="https://www.facebook.com/subha.saha.1675275?mibextid=ZbWKwL" target="_blank">
                    <i class='bx bxl-facebook-circle'></i>
                </a>
                <a class="slink" href="https://www.instagram.com/subhadip__saha?igsh=MW50MzZ0eDg4OW9ncw==" target="_blank">
                    <i class='bx bxl-instagram-alt'></i>
                </a>
                <a class="slink" href="https://x.com/SubhadipSa36778?t=6Zs0H8Z35XGj1fCqD11OYA&s=09" target="_blank">
                    <i class='bx bxl-twitter'></i>
                </a>
                <a class="slink" href="https://www.linkedin.com/in/subhadip-saha-69a179214?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" target="_blank">
                    <i class='bx bxl-linkedin'></i>
                </a>
                <a class="slink" href="https://github.com/Subhadipsahaa" target="_blank">
                    <i class='bx bxl-github'></i>
                </a>
                <a class="slink" href="https://github.com/Subhadipsahaa" target="_blank">
                    <a class="slink" href="https://wa.me/qr/P3XI7CYPIWSIC1" target="_blank">
                        <i class='bx bxl-whatsapp'></i>
                    </a>
                </a>
            </div>
        </form>
    </div>
</body>

</html>